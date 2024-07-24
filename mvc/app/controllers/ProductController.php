<?php 
class ProductController extends BaseController {
    public function index() {
        $this->view("layouts/client_layout", ["content"=>"product"]);
    }
}

?>