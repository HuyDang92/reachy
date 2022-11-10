<?php
session_start();

require_once "../../global.php";
require_once "../../dao/pdo.php";
require_once "../../dao/user.php";
session_start();
extract($_REQUEST);
if (exist_param("btn-sendmail")) {
    $CONTENT_URL = "../../content";
    $code = sendEmail($email);
    add_session("code", $code);
    $VIEW_NAME = "user/activate.php";
} else {
    if ($code_ipt == $_SESSION['code']) {
        user_insert($user_name, $password, $email, $phone_number);
        user_activate($_SESSION['login']);
        user_signIn($email, $password);
        header("location:../../index.php");
    } else {
        unset($_SESSION['code']);
        $MESSAGE = "Mã xác nhận không đúng";
        $VIEW_NAME = "user/activate.php";
    }
}
require '../layout-overall.php';