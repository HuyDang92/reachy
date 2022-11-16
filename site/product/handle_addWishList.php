<?php  
    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";    
    require_once "../../dao/product.php";    
    extract($_REQUEST);
    session_start();
    if(!isset($_SESSION['login'])){
        add_session("message","Vui lòng đăng nhập để được thêm sản phẩm vào danh sách yêu thích!");
        header("location:../../index.php");
    }else{
        if(product_checkLiked($id_product,$_SESSION['login'])){
           $wishListItem =  product_checkLiked($id_product,$_SESSION['login']);
           product_unLike($wishListItem['id_wishlist']);
        header("location:../../index.php");
        }else{
            product_like($id_product,$_SESSION['login']);
            header("location:../../index.php");
        }
    }
?>

