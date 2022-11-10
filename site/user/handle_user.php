<?php  
    require "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";
    session_start();
    extract($_REQUEST);
    $id_user = $_SESSION['login'];
    print_r($_REQUEST);
    if(exist_param('updateAvatar')){
        // user_updateAvatar($id_user,$new_avatar['name']);
    }
?>
