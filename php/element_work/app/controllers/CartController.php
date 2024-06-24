<?php
class CartController extends BaseController
{
    private $__modelName;
    private $__iduser;
    public function __construct($conn)
    {
        $this->__modelName = $this->initModel("CartModel", $conn);
        $this->__iduser = $_SESSION["user"]["id"];
    }

    // insert to cart db
    public function addToCartBd($idbook = null)
    {
        if (isset($idbook) && isset($this->__iduser)) {
            // get info book from db books
            $book = $this->__modelName->getInfoBookFromDbBooks($idbook);
            // insert to db purcharbook
            $this->__modelName->insertBookToDbCart($idbook, $book->bookname, $book->auther, $book->sale, $book->price, $book->category, $book->img, $this->__iduser);
            // get data from book and add to session and print
        } else {
            // open cart
            $result = $this->__modelName->getBookFromDbCart($this->__iduser);
            $this->view("cart", ["book" => $result]);
        }
    }

    // select to cart
    public function selectToCart()
    {
        $result = $this->__modelName->getBookFromDbCart($this->__iduser);
        $this->view("cart", ["book" => $result]);
    }

    // del
    public function removeFromCart($id) {
        $this->__modelName->deleteBookById($id);
    }

}
