<?php  
session_start();

    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";
    session_start();
    extract($_REQUEST);
    if(!user_checkExistEmail($email)){
        global $email;
        $MESSAGE = "Địa chỉ email không tồn tại";
        $VIEW_NAME = "user/sign-in.php";
    }else{
        $info = user_selectByEmail($email);
        if($info['password'] != $password){
            global $email;
            $MESSAGE = "Mật khẩu không đúng";
            $VIEW_NAME = "user/sign-in.php";
            $check = false;
        }else{
            user_signIn($email,$password);
            header("location:../../index.php");
        }
    }
    require "../layout-overall.php";