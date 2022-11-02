<?php
class danhmuc{
    private $dm_id;
    private $dm_ten;
    
    public function getId() {
        return $this->dm_id;
    }
    public function getTen() {
        return $this->dm_ten;
    }
  
    public function __construct($dm_id,$dm_ten) {
        $this->dm_id=$dm_id;
        $this->dm_ten=$dm_ten;
    }
    public function __toString() {
        return "";
    }
    
}


?>