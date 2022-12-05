<?php  
    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";
    require_once "../../dao/comment.php";
    session_start();
    extract($_REQUEST);
    if(exist_param("btn_uploadComment")){
        $id_user = $_SESSION['login'];
        comment_insert($id_product, $id_user, $message);
        $productLink = $_SESSION['productLink'];
        unset($_SESSION['productLink']);
        header("location:$productLink");
    }
?>