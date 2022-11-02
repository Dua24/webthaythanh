<?php
include_once "../modules/db_module.php";
require_once "danhmuc.php";
require_once "sanpham.php";


class Model{
    public function getCategoryList()
    {
        include '../link.php';
        $result = chayTruyVanTraVeDL($link, "select * from tbl_danhmuc");
        $data = array();
        while($rows = mysqli_fetch_object($result)){
            $dm = new danhmuc($rows->dm_id,$rows->dm_ten);
            array_push($data,$dm);
        }
        giaiPhongBoNho($link,$result);
        return $data;
    }
    public function getProductList() {
        // result
        require_once "../typeProduct/typeProduct.php";
        //--
        include '../link.php';
        $data = array();
        while($rows = mysqli_fetch_object($result)){
            $sp = new sanpham($rows->id_sp,$rows->ten_sp,$rows->gia_sp,$rows->img_sp,$rows->dm_id);
            array_push($data,$sp);
        }
        giaiPhongBoNho($link,$result);
        return $data;
    }
    public function getProductById($id) {
        //--
        include '../link.php';
        $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where id_sp = $id");
        while($rows = mysqli_fetch_object($result)){
            $sp = new sanpham($rows->id_sp,$rows->ten_sp,$rows->gia_sp,$rows->img_sp,$rows->dm_id);
        }
        giaiPhongBoNho($link,$result);
        return $sp;
    }
}
?>