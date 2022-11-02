<?php

    function dangki($link,$username,$password) {
        chayTruyVanKhongTraVeDL($link,"insert into tbl_user values(NULL,'".mysqli_real_escape_string($link,$username)."','".md5($password)."',0)");
    }
    function dangnhap($link,$username,$password){
        $result = chayTruyVanTraVeDL($link, "select user_id,role from tbl_user where (user_name = '".mysqli_real_escape_string($link,$username)."'
        and user_password='".md5($password)."')");
        $row = mysqli_fetch_row($result);
        mysqli_free_result($result);
        if($row[0]>0 ){
            $_SESSION['username'] = $username;
            if($row[1] == 1) {
                $_SESSION['role'] = $row[1];
            }
        return true;
        }else {
            return false;
        }
    }

    function dangxuat() {
        if(isset($_SESSION['username'])){
            unset($_SESSION['username']);
            unset($_SESSION['role']);
            return true;
        } else {
            return false;
        }
    }
    function role() {
        
    }

?>