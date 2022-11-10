<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'add' :
                
                include 'category/add.php';
                break;
            case 'list' :
                include 'category/list.php';
                break;
            case 'del' :
                
                include 'category/list.php';
                break;
            case 'update' :

                include 'category/update.php';
                break;
            case 'update_cate' :
                
                include 'category/list.php';
                break;
            default:
                include 'category/add.php';
                break;
        }
    }
?>