<?php 
class HomeModel {
    private $__conn;
    public function __construct($conn) {
        $this->__conn = $conn;
    }

    public function getAllCustomers($page, $limit) {
        try {
            if(isset($this->__conn)) {
                $offset = ($page -1 ) * $limit;
                $sql = "select * from customer LIMIT :limit OFFSET :offset";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam("limit", $limit, PDO::PARAM_INT);
                $stmt->bindParam("offset", $offset, PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }

    public function search($page, $limit, $name, $age) {
        try {
            if(isset($this->__conn)) {
                $params = [];
                $offset = ($page - 1 ) * $limit;
                $sql = "select * from customer ";
                if (!empty($name)) {
                    $sql = $sql." where name = '$name' ";
                }

                if (!empty($age)) {
                    if (str_contains($sql, "where")) {
                        $sql = $sql." AND age = '$age' ";
                    } else {
                        $sql = $sql." WHERE age = '$age' ";
                    }
                }

                $sql = $sql." LIMIT :limit OFFSET :offset";
                $stmt = $this->__conn->prepare($sql);
                $stmt->bindParam("limit", $limit, PDO::PARAM_INT);
                $stmt->bindParam("offset", $offset, PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $result;
            } else {
                echo "not connection";
                die();
            }
        } catch (PDOException $e) {
            echo "". $e->getMessage();
        }
        return null;   
    }
}




?>