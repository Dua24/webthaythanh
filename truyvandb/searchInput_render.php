<?php
require '../link.php';
if (isset($_GET['search'])) {
    if ($_GET['search'] != "") {
        $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham where ten_sp like '%" . $_GET['search'] . "%'");
        $slg = chayTruyVanTraVeDL($link, "select count(*) from tbl_sanpham where ten_sp like '%" . $_GET['search'] . "%'");
    }
    if ($_GET['search'] == "") {
        require '../truyvandb/pagination_render.php';
        $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit " . $from . ", " . $num_on_page);
    }
}
