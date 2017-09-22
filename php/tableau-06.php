<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <title>tableau-06</title>
    </head>
    <body>
        <section>
            <h2>Exercice : tableau-06.txt</h2>
<?php
if(file_exists('../data/tableau-06.txt')){
    $lines = file('../data/tableau-06.txt');
    echo '<ul>';
    foreach ($lines as $line_num => $line) {
        echo "<li><a href=\"" . trim($line) . "\">". trim($line) ."</a></li>\n";
    }
    echo '</ul>';
}else{
    echo '<p>Le fichier n\'existe pas</p>';
}
?>
        </section>
        <footer>
            <a href="../index.php">Retour à l'index.</a>
        </footer>
    </body>
</html>
