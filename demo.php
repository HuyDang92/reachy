<?php 
    session_start();
    $_SESSION['s'] = "sd";
    if(isset($_SESSION['s'])){
        echo $_SESSION['s'];
        session_unset();
    }
    if(!isset($_SESSION['s'])){
        echo "sss";
    }
?>
