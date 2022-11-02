<?php

function validateLenUP($up) {
    return strlen($up)>=8&&strlen($up)<=30;
}

function exitsUserName($link,$username) {
    $result = chayTruyVanTraVeDL($link, "select count(*) from tbl_user where user_name = '".$username."'");
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
    return $row[0]>0;
}


?>