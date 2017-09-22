<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../../css/annuaire.css" />
        <title>Presentation 2</title>
    </head>
    <body>
        <header>
            <h1>Liste des contacts</h1> 
        </header>
        <section>
            <table>
                <tr>
                    <th>Nom</th><th>Prenom</th><th>Telephone</th>
                </tr>
<?php
    if(file_exists("../../data/annuaire.txt")){
        $file = file("../../data/annuaire.txt");
        sort($file);
        foreach ($file as $lignes) {
            echo '<tr>';
            $ligne = explode(";", $lignes);
            foreach ($ligne as $key => $segment) {
                if($key == 2){
                    $segment = str_split($segment, 2);
                    $segment = implode("-", $segment); 
                };
                echo '<td>'. $segment .'</td>';
            }
            echo "</tr>";
        }
    }else{
        echo "<p>Le fichier est introuvable. Commencez par créer un contact.</p>";
    }
?>
            </table>
        </section>
        <footer>
            <a href="/DL101-PHP/html/annuaire_index.html">Retour à l'index.</a>
        </footer>
    </body>
</html>
