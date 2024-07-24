<?php 
class UserController  extends BaseController {
    private $__model;
    public function __construct($conn) {
        $this->__model = $this->initModel("UserModel", $conn);
    }

    public function login() {
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $user = $this->__model->login($username, $password);
            if(isset($user) && $user) {
                $_SESSION["user"] = $user;
                if($user["role"] == "admin") {
                    header("Location: http://localhost/mvc/admin/index");
                } else {
                    header("Location: http://localhost/mvc/home/index");
                }
            } else {
                header("Location: http://localhost/mvc/user/login?error=true");
            }
        } else {
            $this->view("login");
        }
    }
    public function logout() {
        if(isset($_SESSION["user"])) {
            $role = $_SESSION["user"]["role"];
            $_SESSION["user"] = null;
            if($role =="admin") {
                header("Location: http://localhost/mvc/user/login");
            } else {
                header("Location: http://localhost/mvc/home/index");
            }
        }
        header("Location: http://localhost/mvc/home/index");
    }

    public function execute($id = null) {
        //insert or update
        if(isset($_POST["submit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $role = $_POST["role"];
            $id =  $_POST["id"];
            if(empty($id)) {
                //insert
                $this->__model->createUser($username, $password, $role);
            } else {
                //update user
                $this->__model->updateUserById($id,$username, $password, $role);
            }
            
        } else {
            $user = $this->__model->getUserById($id);
            $this->view("user/form", ["user"=> $user]);
        }

        //onpen form
    }

    public function listUsers() {
        $listUser =  $this->__model->listUsers();
        $this->view("layouts/client_layout", ["content"=>"user/listUser", "listUser"=>$listUser]);
    }

    public function delete($id) {
        $this->__model->deleteUserById($id);
    }
}




?>