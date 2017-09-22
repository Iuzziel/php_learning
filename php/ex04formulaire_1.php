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
        <title>ex04formulaire_1</title>
    </head>
<?php
    $nom;
    $age;
    $marit;
    $interet;
    $insert;
    
    foreach ($_POST as $key => $value) {
        global $nom, $age, $marit, $interet, $insert;
        switch ($key) {
            case "nom":
                $nom = $value;
                break;
            case "age":
                $age = $value;
                break;
            case "marit":
                $marit = $value;
                break;
            case "internet":
                if($value == "on"){
                    $interet .= " internet" . ",";
                }
                break;
            case "micro":
                if($value == "on"){
                    $interet .= " micro-informatique" . ",";
                }
                break;
            case "jeux":
                if($value == "on"){
                    $interet .= " jeux-vidéo";
                }
                break;
        }
    }
    $insert = '(\''.$nom.",".$age.',\''.$marit.'\','.$interet.')';
?>
    <body>
        <section>
            <h1>Merci à vous, <?=$nom?></h1>
            <p>
                Vous avez donc le bel âge de <?=$age?>ans, 
                vous êtes <?=$marit?> et vous vous intéressez à<?=$interet?>.
            </p>
            <p>
                Je m'empresse d'envoyer la requête :<br />
                <span class='gras'>insert into MaTable values <?=$insert?></span><br/>
                à notre base de données.
            </p>
        </section>
        <footer>
            <a href="../index.php">Retour à l'index.</a>
        </footer>
    </body>
</html>
