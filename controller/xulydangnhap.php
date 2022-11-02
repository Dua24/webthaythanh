<?php
session_start();

require_once "../modules/db_module.php";
require_once "../modules/user_module.php";

$link = null;
taoKetNoi($link);

if(isset($_POST['lusername']) && isset($_POST['lpassword'])) {
    if(dangnhap($link,$_POST['lusername'],$_POST['lpassword'])) {
        if(isset($_SESSION['role'])) {
            giaiPhongBoNho($link,true);
            header("Location: ../views/admin/admin.php");
        }else {
            giaiPhongBoNho($link,true);
            header("Location: ../index.php?msg=login-success");
        }
        
    } else {
        giaiPhongBoNho($link,true);
        header("Location: ../index.php?msg=login-fail");
    }
} 
else{
        giaiPhongBoNho($link,true);
        header("Location: ../index.php");
    }
