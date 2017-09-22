<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <title>tableau-07</title>
    </head>
    <body>
        <section>
            <h2>Exercice : tableau-07.txt</h2>
<?php
if(file_exists('../data/tableau-07.txt')){
    $lines = file('../data/tableau-07.txt');
    echo '<ul>';
    foreach ($lines as $line_num => $line) {
        echo "<li><a href=\"" . substr(trim($line), 0, strpos($line, "*")) . "\">". substr(strstr(trim($line), '**'), 2) ."</a></li>\n";
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
