<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../../css/annuaire.css" />
        <title>Presentation 1</title>
    </head>
    <body>
        <header>
            <h1>Liste des contacts</h1> 
        </header>
        <section>
<?php
    if(file_exists("../../data/annuaire.txt")){
        $file = file("../../data/annuaire.txt");
        sort($file);
        echo '<ul>';
        foreach ($file as $lignes) {
            $ligne = explode(";", $lignes);
            echo '<li>';
            foreach ($ligne as $key => $segment) {
                switch ($key) {
                    case 0:
                        $msg = "Nom";
                        break;
                    case 1:
                        $msg = "Prenom";
                        break;
                    case 2:
                        $msg = "Téléphone";
                        $segment = str_split($segment, 2);
                        $segment = implode("-", $segment);
                        break;
                    default:
                        break;
                }                
                echo "$msg : $segment<br/>";
            }
            echo '</li>';
        }
        echo "</ul>";
    }else{
        echo "<p>Le fichier est introuvable. Commencez par créer un contact.</p>";
    }
?>
        </section>
        <footer>
            <a href="/DL101-PHP/html/annuaire_index.html">Retour à l'index.</a>
        </footer>
    </body>
</html>
