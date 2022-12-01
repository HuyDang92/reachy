<?php  
    /**
    * Xuất thông tin hóa đơn
    */
    function bill_selectLasted(){
        $sql = "SELECT * FROM bill ORDER BY id_bill DESC";
        return pdo_query_one($sql);
    }
    /**
    * Xuất hóa đơn theo mã
    * @param int $id_bill Mã hóa đơn
    */
    function bill_selectOne($id_bill){
        $sql = "SELECT * FROM bill WHERE id_bill = ?";
        return pdo_query_one($sql,$id_bill);
    }
    /**
    * Thêm hóa đơn
    * @param int $id_user Mã khách hàng
    * @param string $address Địa chỉ giao hàng
    * @param string $note Ghi chú đơn hàng
    * @param string $payment Phương thức thanh toán
    */
    function bill_insert($id_user,$address,$note,$payment){
        $sql = "INSERT INTO bill(id_bill,id_user,address,payment,note) VALUES (null,?,?,?,?)";
        pdo_execute($sql,$id_user,$address,$note,$payment);
    }
    /**
    * Thêm danh sách sản phẩm trong hóa đơn
    * @param int $id_bill Mã hóa đơn
    * @param int $id_product Mã sản phẩm
    * @param int $size Kích thước sản phẩm
    * @param int $quantity Số lượng sản phẩm
    */
    function bill_detail_insert($id_bill,$id_product,$size,$quantity){
        $sql = "INSERT INTO bill_detail(id_billdetail,id_bill,id_product,size,amount) VALUES (null,?,?,?,?)";
        pdo_execute($sql,$id_bill,$id_product,$size,$quantity);
    }
?>