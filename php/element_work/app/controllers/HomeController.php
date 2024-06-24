<?php
// controller
class HomeController extends BaseController {
    private $__modelName;
    function __construct($conn)
    {
        $this->__modelName = $this->initModel("HomeModel", $conn);
    }

    // action
    public function index() {
        $book = $this->__modelName->selectBooks();
        $this->view("layouts/client_layout", ["content"=>"home", "book"=>$book]);
    }

    

    
}

?>