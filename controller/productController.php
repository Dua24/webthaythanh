<?php
require_once "../models/Model.php";
class Product_Controller{
    public $model;
    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if(!isset($_GET["id"])) {
            $listProduct = $this->model->getProductList();
            include "../views/product.php";
        }else {
            $product = $this->model->getProductById($_GET["id"]);
            include "../views/detailProduct.php";
        }
    }
}
?>