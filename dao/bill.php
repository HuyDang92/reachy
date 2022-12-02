<?php
/**
    * Xuất danh sách đơn hàng
    * @return array  Danh sách đơn hàng
    */
    function bill_selectAll(){
        $sql = "SELECT * FROM bill";
        return pdo_query($sql);
    }
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
    * Cập nhật trạng thái giao hàng
    * @param int $id_bill Mã đơn hàng
    */
    function bill_updateStatus($status, $id_bill)
    {   
    $sql = "UPDATE bill SET status = ? WHERE id_bill=?";
    pdo_execute($sql,$status, $id_bill);
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
    /* Xóa đơn hàng theo mã đơn hàng
    * @param int $id_bill Mã đơn hàng
    * @return array đơn hàng theo mã tương ứng
    */

    function bill_detailSelectbyIdBill($id_bill){
        $sql = "SELECT * FROM bill_detail WHERE id_bill = ?";
        return pdo_query_one($sql,$id_bill);
    }
    function bill_delete($id_bill){
        $sql = "SET FOREIGN_KEY_CHECKS=0;
                DELETE FROM bill WHERE id_bill = ?;
                SET FOREIGN_KEY_CHECKS=1;";
        pdo_execute($sql,$id_bill);
    }
?>