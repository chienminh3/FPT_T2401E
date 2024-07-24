<?php
class ProductController extends BaseController
{
    private $__modelName;
    public function __construct($conn)
    {
        $this->__modelName = $this->initModel("ProductModel", $conn);
    }

    // action product
    public function execute($id = null)
    {
        // get form
        if (isset($_POST["submit"])) {
            $bookname = $_POST["bookname"];
            $auther = $_POST["auther"];
            $sale = $_POST["sale"];
            $price = $_POST["price"];
            $category = $_POST["category"];
            $img = $_POST["img"];
            $id = $_POST["id"];

            if (empty($id)) {
                // insert data
                $this->__modelName->insertBook($bookname, $auther, $sale, $price, $category, $img);
            } else {
                // update data
                $this->__modelName->update($id, $bookname, $auther, $sale, $price, $category, $img);
            }
            // open form
        } else {
            $book = $this->__modelName->getBookById($id);
            $this->view("product/formProduct", ["book" => $book]);
        }
    }

    public function ListProducts()
    {
        $books = $this->__modelName->selectBooks();
        $this->view("product/listProduct", ["book" => $books]);
    }

    public function deleteBookById($id)
    {
        $this->__modelName->delete($id);
    }
}
