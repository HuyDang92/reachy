<?php  
    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";    
    require_once "../../dao/product.php";
    require_once "../../dao/cart.php";
    session_start();
    extract($_REQUEST);
    print_r($_REQUEST);
    $id_user = $_SESSION['login'];
    if(exist_param("btn_quantity")){
        cart_update($id_cart,$size,$quantity);
        if($quantity==0){
            cart_delete($id_cart);
        }
    }else if(isset($_GET['id_cart'])){
        cart_delete($_GET['id_cart']);
    }else{
        if(cart_checkExistSize($id_user,$id_product,$size)){
            $allCarts = cart_checkExistSize($id_user,$id_product,$size);
            $i=0;
            foreach($allCarts as $cart){
                if($cart['size'] == $size){
                    $i++;
                    cart_inscreaseQuantity($cart['id_cart'],$quantity);
                    add_session("reload","true");
                }
                if($i>0){
                    cart_delete($id_cart);
                }
            }
        }else{
            cart_update($id_cart,$size,$quantity);
        }
    }
    $lasted_url = $_SESSION['lasted_url'];
    unset($_SESSION['lasted_url']);
    // header("location:$lasted_url");
?>
