<?php  
    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";    
    require_once "../../dao/product.php";
    require_once "../../dao/cart.php";
    session_start();
    extract($_REQUEST);
    cart_update($id_cart,$size,$quantity);
    $lasted_url = $_SESSION['lasted_url'];
    unset($_SESSION['lasted_url']);
    header("location:$lasted_url");
?>
