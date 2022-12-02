<?php 
    require_once "../../global.php";
    require_once "../../dao/pdo.php";
    require_once "../../dao/user.php";    
    require_once "../../dao/product.php";
    require_once "../../dao/bill.php";
    session_start();
    extract($_REQUEST);
    $full_address = $address .", " .$village .", " .$district .", " .$province;
    $id_user = $_SESSION['login'];
    if(isset($_SESSION['product'])){
        $products = $_SESSION['product'];
        if(!is_array($products[0])){
            $products = array($products);
        }
    }
    if($payment == "cod"){
        $order_info = array(
            "username" => $username,
            "email" => $email,
            "phone_number" => $phone_number,
            "address" => $full_address
        );
        add_session("order_info",$order_info);
        bill_insert($id_user,$full_address,$payment,$note);
        $bill = bill_selectLasted();
        $id_bill = $bill['id_bill'];
        foreach($products as $product){
            bill_detail_insert($id_bill,$product['id_product'],$product['size'],$product['quantity']);
        }
        echo "
            <script>window.parent.location.href='../product/?order_return&id_bill=$id_bill'</script>
        ";
    }else{
        echo "ss";
    }
?>