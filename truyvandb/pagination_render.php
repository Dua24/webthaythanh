<?php
require '../link.php';
$page = isset($_GET['page'])?$_GET['page']:1;
$page = is_numeric($page)?$page:1;
$num_on_page = 12;
$from = ($page-1)*$num_on_page;
$result = chayTruyVanTraVeDL($link, "select count(*) from tbl_sanpham");
$row = mysqli_fetch_row($result);
$total =ceil($row[0]/$num_on_page);
$result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit ".$from.", ".$num_on_page);

?>