<?php $date = getdate();?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../DL101-PHP/css/main.css" />
        <title>Index.php</title>
    </head>
    <body>
        <header>
<?php for ($i = 1; $i < 3; $i++){ ?>
            <h<?php echo $i; ?>> Hello world </h<?php echo $i; ?>>
<?php } ?>
        </header>
        
        <section>
            <p>
                Date du jour : <?php echo $date["mday"]." ".$date["month"]." ".$date["year"]; ?><br />
                Heure : <?php echo $date["hours"]."h ".$date["minutes"]."mn ".$date["seconds"]; ?>s.<br />
                Sur le serveur : <?php echo $_SERVER["SERVER_NAME"];?>
            </p>
        </section>
        
        <section>
            <h3>Exercice login</h3>
            <ul>
                <li><a href="html/login.html">Page login</a></li>
                <li><a href="php/system.php">Page système</a></li>
            </ul>
        </section>
        
        <section>
            <h3>Exercices</h3>
            <ul>
                <li><a href="php/tableau-06.php">Tableau-06</a></li>
                <li><a href="php/tableau-07.php">Tableau-07</a></li>
                <li><a href="php/tableau-08.php">Tableau-08</a></li>
                <li><a href="php/tableau-09.php">Tableau-09</a></li>
                <li><a href="php/exo3_formulaire.php">Exo3_formulaire</a></li>
            </ul>
        </section>
        
        <section>
            <h3>Exercice manipulation de fichiers</h3>
            <ul>
                <li><a href="html/manip_fichier_1.html">test 1</a></li>
            </ul>
        </section>
        <section>
            <h3>Exercice CRUD</h3>
            <ul>
                <li><a href="html/annuaire_index.html">Annuaire</a></li>
            </ul>
        </section>
    </body>
</html>
