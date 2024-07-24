<?php
class HomeModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }

    // select book
    public function selectBooks()
    {
        try {
            $sql = "select * from books";
            $stmt = $this->__conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo "ERROR " . $e->getMessage();
        }
    }

    public function selectBookById($id) {
        try {
            $sql = "select * from books where id= :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>