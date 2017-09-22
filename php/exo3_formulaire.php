<?php
    session_start();
    
    if(isset($_SESSION["exo3val2"]) && isset($_POST["reponse"]) && $_SESSION["exo3val2"] == $_POST["reponse"]){
        $_SESSION["bonneRep"] = TRUE;
    }elseif(isset($_SESSION["exo3val2"]) && isset($_POST["reponse"])){
        $_SESSION["bonneRep"] = FALSE;
    }else{
        $_SESSION["bonneRep"] = "";
        unset($_SESSION["exo3val2"]);
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <title>ex3_formulaire</title>
    </head>
    <body>
        <header>
            <h2>ex3_formulaire</h2>
        </header>
        <section>
            <span>Remplis la case avec le bon nombre pour que le calcul soit correct :</span><br/>
            <form method="post" action="">
                <span>
<?php
    $val1 = rand(0, 1000);
    $val2 = rand(0, 1000);
    $_SESSION["exo3val2"] = $val2;
    $val3 = $val1 + $val2;
    echo $val1 . " + <input type=\"text\" name=\"reponse\">  = " . $val3;
?>
                    <input type="submit" value="Verifier" />
                </span><br/>
                <input type="reset" value="Recommencez" />
            </form>
        </section>
        <section>
<?php
    if(isset($_SESSION["exo3val2"])){
        if($_SESSION["bonneRep"] === TRUE){
            echo 'Bonne réponse';
        }elseif($_SESSION["bonneRep"] === FALSE){
            echo 'Mauvaise réponse';
        }
    }
?>
        </section>
        <footer>
            <a href="../index.php">Retour à l'index.</a>
        </footer>
    </body>
</html>
