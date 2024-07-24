<?php
class CartModel
{
    private $__conn;
    public function __construct($conn)
    {
        $this->__conn = $conn;
    }

    // DATA form books
    public function getInfoBookFromDbBooks($idbook)
    {
        try {
            $sql = "select * from books where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $idbook, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo "ERROR" . $e->getMessage();
        }
    }

    // insert book by id
    public function insertBookToDbCart($idbook, $bookname, $auther, $sale, $price, $category, $img, $iduser)
    {
        try {
            $sql = "insert into purcharbook (`idbook`,`bookname`, `auther`, `sale`, `price`, `category`, `img`, `iduser`) values (:idbook, :bookname, :auther, :sale, :price, :category, :img, :iduser)";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("idbook", $idbook, PDO::PARAM_INT);
            $stmt->bindParam("bookname", $bookname, PDO::PARAM_STR);
            $stmt->bindParam("auther", $auther, PDO::PARAM_STR);
            $stmt->bindParam("sale", $sale, PDO::PARAM_INT);
            $stmt->bindParam("price", $price, PDO::PARAM_INT);
            $stmt->bindParam("category", $category, PDO::PARAM_STR);
            $stmt->bindParam("img", $img, PDO::PARAM_STR);
            $stmt->bindParam("iduser", $iduser, PDO::PARAM_INT);
            $stmt->execute();
            header("location: http://localhost/element_work/cart/selectToCart/$idbook");
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }

    // get book by id
    public function getBookFromDbCart($iduser)
    {
        try {
            $sql = "SELECT * FROM purcharbook WHERE iduser = :iduser";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam(":iduser", $iduser, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage();
            return null; // Thêm trả về null để đảm bảo có giá trị trả về trong trường hợp lỗi
        }
    }

    // del
    public function deleteBookById($id)
    {
        try {
            $sql = "delete from purcharbook where id = :id";
            $stmt = $this->__conn->prepare($sql);
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            header("location: http://localhost/element_work/cart/selectToCart");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
