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
}
?>