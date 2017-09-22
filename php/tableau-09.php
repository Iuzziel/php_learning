<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <title>tableau-09</title>
    </head>
    <body>
        <section>
            <h2>Exercice : tableau-09.txt</h2>
<?php
if(file_exists('../data/tableau-09.txt')){
    $segment;
    $lines = file('../data/tableau-09.txt');
    echo '<select id="select" name="user">';
    foreach ($lines as $line_num => $line) {
        $id;
        $mdp;
        $userName;
        $userLast;
        $ligneSeg = explode(";", $line);
        foreach ($ligneSeg as $ligneSeg_num => $segment) {
            switch (($ligneSeg_num + 1) % 4) {
                case 1:
                    $id = $segment;
                    break;
                case 2:
                    $userName = $segment;
                    break;
                case 3:
                    $userLast = $segment;
                    break;
                case 0:
                    $mdp = $segment;
                    echo "<option id=\"". $id . "\" value=\"" . $mdp . "\">" . $userName . " " . $userLast . "</option>\n";
                    break;
                default:
                    break;
            }
        }
    }
    echo '</select>';
}else{
    echo '<p>Le fichier n\'existe pas</p>';
};
?>
            <input type="button" id="btnAfficher" value="Quel mot de passe?" />
            <p id="afficherIci">
                
            </p>
        </section>
        <footer>
            <a href="../index.php">Retour à l'index.</a>
        </footer>
        <script type="text/JavaScript" language="JavaScript" src="../js/tableau-09.js"></script>
    </body>
</html>
