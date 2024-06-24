<?php
class ProductModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }

    // insert book
    public function insertBook($bookname, $auther, $sale, $price, $category, $img)
    {
        try {
            $sql = "insert into books (`bookname`, `auther`, `sale`, `price`, `category`, `img`) values (:bookname, :auther, :sale, :price, :category, :img)";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("bookname", $bookname, PDO::PARAM_STR);
            $stmt->bindParam("auther", $auther, PDO::PARAM_STR);
            $stmt->bindParam("sale", $sale, PDO::PARAM_INT);
            $stmt->bindParam("price", $price, PDO::PARAM_INT);
            $stmt->bindParam("category", $category, PDO::PARAM_STR);
            $stmt->bindParam("img", $img, PDO::PARAM_STR);
            $stmt->execute();
            header("location: http://localhost/element_work/product/ListProducts");
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
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

    // select book by id
    public function getBookById($id)
    {
        try {
            $sql = "select * from books where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
    }

    // delete 
    public function delete($id)
    {
        try {
            $sql = "delete from books where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("location: http://localhost/element_work/product/ListProducts");
        } catch (PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
    }

    // update book
    public function update($id, $bookname, $auther, $sale, $price, $category, $img)
    {
        try {
            $sql = "update books set bookname = :bookname, auther = :auther, sale = :sale, price = :price, category = :category, img = :img where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("bookname", $bookname, PDO::PARAM_STR);
            $stmt->bindParam("auther", $auther, PDO::PARAM_STR);
            $stmt->bindParam("sale", $sale, PDO::PARAM_INT);
            $stmt->bindParam("price", $price, PDO::PARAM_INT);
            $stmt->bindParam("category", $category, PDO::PARAM_STR);
            $stmt->bindParam("img", $img, PDO::PARAM_STR);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("location: http://localhost/element_work/product/ListProducts");
        } catch (PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
    }
}
