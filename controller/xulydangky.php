<?php
session_start();
require_once "../modules/db_module.php";
require_once "../modules/validate_module.php";
require_once "../modules/user_module.php";

$link = null;
taoKetNoi($link);

if(isset($_POST['rusername']) && isset($_POST['rpassword']) && isset($_POST['repassword'])){
    $valid = $_POST['rpassword'] == $_POST['repassword'];
    $valid = $valid&&validateLenUP($_POST['rusername']);
    $valid = $valid&&validateLenUP($_POST['rpassword']);
    if($valid) {
        if(exitsUserName($link,$_POST['rusername'])){
            giaiPhongBoNho($link,true);
            header("Location:../index.php?msg=duplicate&rusername=".$_POST['rusername']."");
        } else {
            dangki($link,$_POST['rusername'],$_POST['rpassword']);
            giaiPhongBoNho($link,true);
            header("Location: ../index.php?msg=done");
        }
    } else {
        giaiPhongBoNho($link,true);
        header("Location: ../index.php?msg=unvalid-data&rusername=".$_POST["rusername"]."");
    }
}



?>