<?php 
    session_start();
    
    $_SESSION["login"] = $_POST['login'];
    $_SESSION["password"] = $_POST['password'];
    
    if($_SESSION["login"] == 'afpa' && $_SESSION["password"] == 'afpa'){
        $_SESSION["Auth"] = TRUE;
        header("Location: ../php/system.php");
        exit();
    }else{
        header("Location: ../index.php");  
        exit();
    };  
?>