<?php
    /**
    * Xuất danh sách sản phẩm trong giỏ hàng
    * @return array Danh sách sản phẩm
    */
    function cart_selectByUserId($id_user){
        $sql = "SELECT * FROM cart WHERE id_user = ?";
        return pdo_query($sql,$id_user);
    }
    /**
    * Thêm sản phẩm vào giỏ hàng 
    * @param int $id_user Mã khách hàng
    * @param int $id_product Mã sản phẩm
    * @param string $size Kích thước sản phẩm
    * @param int $quantity Số lượng sản phẩm
    */
    function cart_insert($id_user,$id_product,$size,$quantity){
        $sql = "INSERT INTO cart (id_user,id_product,size,quantity) VALUES (?,?,?,?)";
        pdo_execute($sql,$id_user,$id_product,$size,$quantity);
    }
    /**
    * Xóa sản phẩm khỏi giỏ hàng
    * @param int $id_cart Mã dòng trong giỏ hàng
    */
    function cart_delete($id_cart){
        $sql = "DELETE FROM cart WHERE id_cart = ?";
        pdo_execute($sql,$id_cart);
    }
    /**
    * Cập nhật dòng tương ứng trong giỏ hàng
    * @param int $id_cart Mã dòng trong giỏ hàng
    * @param string $size Kích thước sản phẩm
    * @param int $quantity Số lượng sản phẩm
    */
    function cart_update($size,$quantity){
        $sql = "UPDATE cart SET size=?, quantity = ?";
        pdo_execute($sql,$size,$quantity);
    }
    function cart_checkExist($id_user,$id_product){
        $sql = "SELECT * FROM cart WHERE id_user = ? AND id_product = ?";
        return pdo_query($sql,$id_user,$id_product);
    }
    function cart_inscreaseQuantity($id_cart,$quantity){
        $sql = "UPDATE cart SET quantity = quantity + ? WHERE id_cart = ?";
        pdo_execute($sql,$quantity,$id_cart);
    }
?>
