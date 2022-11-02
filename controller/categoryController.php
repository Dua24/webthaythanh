<?php
include "../models/Model.php";
class Category_Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new Model();
    }
    public function invoke()
    {
        $listCategory = $this->model->getCategoryList();
        include "../views/category.php";
    }
}
