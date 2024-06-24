<?php
class UserModel
{
    private $__conn;

    public function __construct($conn)
    {
        $this->__conn = $conn;
    }

    // login
    public function login($email, $password)
    {
        $sql = "select * from users where email = :email and password = :password ";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // save user
    public function register($firstname, $lastname, $numberphone, $email, $password, $role = "user")
    {
        try {
            if (isset($this->__conn)) {
                $sql = "INSERT INTO users (first_Name, last_Name, number_Phone, email, password, role) VALUES (:first_Name, :last_Name, :number_Phone, :email, :password, :role)";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute([
                    ":first_Name" => $firstname,
                    ":last_Name" => $lastname,
                    ":number_Phone" => $numberphone,
                    ":email" => $email,
                    ":password" => $password,
                    ":role" => $role
                ]);
            }
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "insert error: " . $e->getMessage();
        }
    }


    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT); mã hóa password trước khi lưu vao
    // $stmt->bindParam(":password", $hashedPassword, PDO::PARAM_STR);


    // create user for admin
    public function createUser($firstname, $lastname, $numberphone, $email, $password, $role)
    {
        $sql = "insert into users (`first_Name`,`last_Name`,`number_Phone`,`email`,`password`,`role`) values (:first_Name, :last_Name, :number_Phone, :email, :password, :role)";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("first_Name", $firstname, PDO::PARAM_STR);
        $stmt->bindParam("last_Name", $lastname, PDO::PARAM_STR);
        $stmt->bindParam("number_Phone", $numberphone, PDO::PARAM_STR);
        $stmt->bindParam("email", $email, PDO::PARAM_STR);
        $stmt->bindParam("password", $password, PDO::PARAM_STR);
        $stmt->bindParam("role", $role, PDO::PARAM_STR);
        $stmt->execute();
        header("location: http://localhost/element_work/user/listUsers");
    }

    // get listuser
    public function listUsers()
    {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from users order by id desc ";
                $stmt = $this->__conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }

    // update user
    public function updateUserById($id, $firstname, $lastname, $numberphone, $email, $password, $role)
    {
        try {
            $sql = "update users set first_Name = :first_Name, last_Name = :last_Name, number_Phone = :number_Phone, email = :email, password = :password, role = :role where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->bindParam("first_Name", $firstname, PDO::PARAM_STR);
            $stmt->bindParam("last_Name", $lastname, PDO::PARAM_STR);
            $stmt->bindParam("number_Phone", $numberphone, PDO::PARAM_STR);
            $stmt->bindParam("email", $email, PDO::PARAM_STR);
            $stmt->bindParam("password", $password, PDO::PARAM_STR);
            $stmt->bindParam("role", $role, PDO::PARAM_STR);
            $stmt->execute();
            header("location: http://localhost/element_work/user/listUsers");
        } catch (PDOException $e) {
            echo "error" . $e->getMessage();
        }
    }


    // del
    public function deleteUserById($id)
    {
        $sql = "delete from users where id = :id";
        $stmt = $this->__conn->prepare($sql);
        $stmt->bindParam("id", $id, PDO::PARAM_INT);
        $stmt->execute();
        header("location: http://localhost/element_work/user/listUsers");
    }

    // get user by id
    public function getUserById($id)
    {
        try {
            $sql = "select * from users where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo "error: " . $e->getMessage();
        }
    }

    
}
