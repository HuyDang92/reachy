<?php  
    if(isset($_GET['id_bill'])){
        $bill = bill_selectOne($_GET['id_bill']);
        print_r($bill);
    }
?>
<div class="order_container">
    
</div>