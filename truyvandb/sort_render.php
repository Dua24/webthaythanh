<?php
require '../link.php';

if(isset($_GET['sort'])){
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham order by gia_sp ".$_GET['sort']." limit ".$from.", ".$num_on_page."");
} 

?>