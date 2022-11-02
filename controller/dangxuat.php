<?php
session_start();

require_once "../modules/db_module.php";
require_once "../modules/user_module.php";

$link = null;
taoKetNoi($link);

if(dangxuat()){
    giaiPhongBoNho($link,true);
    header("Location: ../index.php?msg=log-out");
} else {
    giaiPhongBoNho($link,true);
    header("Content-Type: text/html; charset=utf8");
    echo "Không thể đăng xuất !";
}

?>