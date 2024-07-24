<?php
class HomeModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }

    public function getAllUser() {
        try {
            if (isset($this->__conn)) {
                $sql = "select * from users";
                $stmt = $this->__conn->prepare($sql);   
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $result;
            } else {
                echo "do not connection !";
                die();
            }
        } catch (Exception $e) {
            echo "<h1 style='color:red'>Error: </h1>" . $e->getMessage();
        }
        return null;
    }
}
?>