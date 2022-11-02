<?php



// pagination render
include "../truyvandb/pagination_render.php";


// category render 
include "../truyvandb/category_render.php";

// searchInput render
include "../truyvandb/searchInput_render.php";
// sort render
include "../truyvandb/sort_render.php";

if(!isset($_GET['page']) && !isset($_GET['search']) && !isset($_GET['sort']) && !isset($_GET['dm'])) {
    $result = chayTruyVanTraVeDL($link, "select * from tbl_sanpham limit ".$from.", ".$num_on_page);
}

?>