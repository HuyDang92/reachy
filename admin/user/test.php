<?php
    print_r($_POST['id_user']);
    if(is_array($_POST['id_user'])){
        echo 'yes';
    }else{
        echo 'no';
    }
    echo '---------------';
    print_r($_POST['role']);
?>