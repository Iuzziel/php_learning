<?php 
    session_start();
    
    $_SESSION["login"] = $_POST['login'];
    $_SESSION["password"] = $_POST['password'];
    
    do {
        if(file_exists("../data/manip_fichier_1.txt")){
            $fichier = fopen("../data/manip_fichier_1.txt", "a");
            fwrite($fichier, "login : ".$_SESSION["login"]." password : ".$_SESSION["password"]."\r\n");
            fclose($fichier);

            $_SESSION["Auth"] = TRUE;
        }else{
            $fichier = fopen("../data/manip_fichier_1.txt", "w");
            fwrite($fichier, "login & password : \r\n");
            fclose($fichier);
            $_SESSION["Auth"] = FALSE;
        };
    } while (!(isset($_SESSION["Auth"]) && $_SESSION["Auth"]==TRUE));

    header("Location: ../php/system.php");
?>
