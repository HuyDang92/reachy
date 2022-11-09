<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'add' :

                include 'product/add.php';
                break;
            case 'list' :
                include 'product/list.php';
                break;
            case 'del' :
                
                include 'product/list.php';
                break;
            case 'update' :
                include 'product/update.php';
                break;
            case 'update_product' :
                
                include 'product/list.php';
                break;
            default:
                include 'product/add.php';
                break;
        }
    }
?>