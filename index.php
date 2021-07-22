<?php
    if ($_COOKIE['user'] == ""){
        header('Location: /index1.php');
    }
    else{
        header('Location: /PersonalAccount.php');
    }
?>