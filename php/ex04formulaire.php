<?php
    session_start();
    if(!(isset($_SESSION["Auth"]) && $_SESSION["Auth"]==TRUE)){
        header('Location: ../php/login.php');
        exit();
    };
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <title>ex04formulaire</title>
    </head>
    <body>
        <section>
            <h1>Un petit formulaire(pour commencer)</h1>
            <p>Merci de renseigner les informations suivantes :</p>
            <form method="post" action="../php/ex04formulaire_1.php">
                <span>Votre nom : <input type="text" name="nom"/></span><br />
                <span>Votre age : <input type="number" name="age"/></span><br />
                <span>Votre situation maritale : 
                    <input type="radio" name="marit" value="Marie" checked>Marié
                    <input type="radio" name="marit" value="Veuf">Veuf(ve)
                    <input type="radio" name="marit" value="Celibataire">Célibataire
                </span><br />
                <span>Vos centres d'intérêt : 
                    <input type="checkbox" name="internet">Internet
                    <input type="checkbox" name="micro">Micro-informatique
                    <input type="checkbox" name="jeux">Jeux Vidéo
                </span><br />
                <span>
                    <input type="submit" value="Envoyer"/>
                    <input type="reset" value="Recommencez"/>
                </span>
            </form>
        </section>
        <footer>
            <a href="../index.php">Retour à l'index.</a>
        </footer>
    </body>
</html>
