<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'add' :
                
                include 'user/add.php';
                break;
            case 'list' :
                include 'user/list.php';
                break;
            case 'del' :
                
                include 'user/list.php';
                break;
            case 'update' :
                include 'user/update.php';
                break;
            case 'update_user' :
                
                include 'user/list.php';
                break;
            default:
                include 'user/add.php';
                break;
        }
    }
?>