<?php
    require_once "sanpham.php";
    class listsanpham{
        private $listsanpham = array();
        public function addSp($sanpham){
            array_push($this->listsanpham, $sanpham);
        }
        public function getListsanpham(){
            return $this->listsanpham;
        }
    }

?>