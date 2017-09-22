<?php
    $sauvegarde[0] = strtoupper($_POST["nom"]);
    $sauvegarde[1] = ucfirst($_POST["prenom"]);
    $sauvegarde[2] = $_POST["telephone"];

    $fichier = fopen("../../data/annuaire.txt", "a");
    fwrite($fichier, "\r\n".$sauvegarde[0].';'.$sauvegarde[1].";".$sauvegarde[2]);
    fclose($fichier);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../../css/annuaire.css" />
        <title>login</title>
    </head>
    <body>
        <section>
            <h3>Le nouveau contact à bien été enregistré :</h3>
<?php    
    $tabTemp = str_split($sauvegarde[2], 2);
    $tabTemp = implode("-", $tabTemp);
    echo '<ul>';
        echo '<li>';
            echo "Nom : ".$sauvegarde[0]."<br/>Prénom : ".$sauvegarde[1]."<br/>Téléphone : ".$tabTemp;
        echo '</li>';
    echo "</ul>";
?>
        </section>
        <footer>
            <a href="/DL101-PHP/html/annuaire_index.html">Retour à l'index.</a>
        </footer>
    </body>
</html>
