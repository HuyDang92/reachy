<?php  
    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";
    require_once "../../dao/cart.php";
    require_once "../../dao/product.php";
    require_once "../../dao/bill.php";
    session_start();
    extract($_REQUEST);
    if($quantity==0) $quantity=1;
    if(!isset($_SESSION['login'])){
        add_session("message","Vui lòng đăng nhập để thực hiện chức năng!");
        $productLink = $_SESSION['productLink'];
        echo $productLink;
        unset($_SESSION['productLink']);
        header("location:$productLink");
    }else{
        if(exist_param("btn_buy")){
            $product = array(
                            "0","id_product" => $id_product,
                            "size" => $size,
                            "quantity" => $quantity
                        );
            add_session("product",$product);
            echo "
                <script>window.parent.location.href='../product/?buy'</script>
                ";
        }else{
            $id_user = $_SESSION['login'];
            if(cart_checkExist($id_user,$id_product)){
                $old_carts = cart_checkExist($id_user,$id_product);
                $check = false;
                foreach($old_carts as $old_cart){
                    if($size == $old_cart['size']){
                        $old_cartID = $old_cart['id_cart'];
                        $check = true;
                        cart_inscreaseQuantity($old_cartID,$quantity);
                        break;
                    }
                }
                if(!$check){
                    cart_insert($id_user,$id_product,$size,$quantity);
                }
            }else{
                echo "thêm mới";
                cart_insert($id_user,$id_product,$size,$quantity);
            }
            $productLink = $_SESSION['productLink'];
            unset($_SESSION['productLink']);
            header("location:$productLink");
        }
    }
    
?>