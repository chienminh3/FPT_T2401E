<?php 
// controller
class HomeController extends BaseController {
    private $__homeModel;
    function __construct($conn)
    {
        $this->__homeModel = $this->initModel("HomeModel",$conn);
    }
    //action
    public function index($page = 1, $limit = 3) {
        $name ="";
        $age = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
           $name = $_POST["name"];
           $age = (int)$_POST["age"];
           $customers = $this->__homeModel->search($page, $limit, $name, $age);
        } else {
            $customers = $this->__homeModel->getAllCustomers($page, $limit);
        }
        
        $this->view("layouts/client_layout", ["content"=>"home", "customers"=>$customers, "page"=>$page, "name"=>$name, "age"=>$age]);
        
    }
    
    function addToCart() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo json_encode($_POST);
        }
    }
}

?>