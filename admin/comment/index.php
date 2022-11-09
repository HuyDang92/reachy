<?php
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'list' :
                include 'comment/list.php';
                break;
            case 'del' :
                
                include 'comment/list.php';
                break;
            default:
                include 'comment/list.php';
                break;
        }
    }
?>