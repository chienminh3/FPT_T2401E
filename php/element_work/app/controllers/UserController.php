<?php
    class UserController extends BaseController {
        private $__modelName;
        public function  __construct($conn)
        {
            $this->__modelName = $this->initModel("UserModel",$conn);
        }

        public function login() {
            if (isset($_POST["email"]) && isset($_POST["password"])) {
                $username = $_POST["email"];
                $password = $_POST["password"];
                $user = $this->__modelName->login($username, $password);
                if (isset($user) && $user) {
                    $_SESSION["user"] = $user;
                    if ($user["role"] == "admin") {
                        header("location: http://localhost/element_work/admin/index");
                    } else {
                        header("location: http://localhost/element_work/home/index");
                    }
                } else {
                    header("location: http://locahost/element_work/user/login?error=true");
                }
            } else {
                $this->view("login");
            }
        }

        public function logout() {
            if (isset($_SESSION["user"])) {
                $role = $_SESSION["user"]["role"];
                $_SESSION["user"] = null;
                if ($role == "admin") {
                    header("location: http://localhost/element_work/user/login");
                } else {
                    header("location: http://localhost/element_work/home/index");
                }
            } else {
                header("location: http://localhost/element_work/home/index");
            }
        }

        public function register() {
            if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["numberphone"]) && isset($_POST["email"]) && isset($_POST["password"])) {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $numberphone = $_POST["numberphone"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $user = $this->__modelName->register($firstname, $lastname, $numberphone, $email, $password);
                if (isset($user)) {
                    $_SESSION["user"] = $user;
                    if ($user["role"] == "admin") {
                        header("location: http://localhost/element_work/admin/index");
                    } else {
                        header("location: http://localhost/element_work/user/login");
                    }
                } else {
                    header("location: http://locahost/element_work/user/login?error=true");
                }
            } else {
                $this->view("register");
            }
        }

        // action user
        public function execute($id = null) {
            // insert or update
            if (isset($_POST["submit"])) {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $numberphone = $_POST["numberphone"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $role = $_POST["role"];
                $id = $_POST["id"];
                
                if (empty($id)) {
                    // insert
                    $this->__modelName->createUser($firstname, $lastname, $numberphone, $email, $password, $role);
                } else {
                    // update
                    $this->__modelName->updateUserById($id, $firstname, $lastname, $numberphone, $email, $password, $role);
                }

            } else {
                // get info user
                $user = $this->__modelName->getUserById($id);
                $this->view("user/form", ["user"=>$user]);
            }
        }

        public function listUsers() {
            $listUser = $this->__modelName->listUsers(); 
            $this->view("user/listUser", ["listUser"=>$listUser]);
        }

        public function deleteUser($id) {
            $this->__modelName->deleteUserById($id);
        }
    }

?>