<?php
class sanpham{
    private $id_sp;
    private $ten_sp;
    private $gia_sp;
    private $img_sp;
    private $dm_id;
    // private $size_sp;
    // private $sl_sp;

    public function getId() {
        return $this->id_sp;
    }
    public function getTen() {
        return $this->ten_sp;
    }
    public function getGia() {
        return $this->gia_sp;
    }
    public function getImg() {
        return $this->img_sp;
    }
    public function getDm_id() {
        return $this->dm_id;
    }
    // public function getSize_sp() {
    //     return $this->size_sp;
    // }
    // public function getSl_sp() {
    //     return $this->sl_sp;
    // }
    
    public function __construct($id_sp,$ten_sp,$gia_sp,$img_sp,$dm_id) {
        $this->id_sp=$id_sp;
        $this->ten_sp=$ten_sp;
        $this->gia_sp=$gia_sp;
        $this->img_sp=$img_sp;
        $this->dm_id=$dm_id;
    }
    public function __toString() {
        return "";
    }
    
}


?>