<?php
    session_start();
    if(!(isset($_SESSION["Auth"]) && $_SESSION["Auth"]==TRUE)){
        header('Location: ../html/login.html');
        exit();
    };
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
        <title>system.php</title>
    <body>
        <section>
            <h2>Page utilisateur enregistré</h2>
            <p>
                <h3>Exercice 4, formulaire :</h3>
                <a href="../php/ex04formulaire.php">Formulaire</a>
            </p>
        </section>
        <section>
            <h3>Page de controle du serveur</h3>
            <table>
                <tr>
                    <th>Variable</th>
                    <th>Valeur</th>
                </tr>
                <?php foreach($_SERVER as $item=>$valeur){ ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td><?php echo $valeur; ?></td>
                </tr>
                <?php } ?>
            </table>
        </section>
        <footer>
            <a href="../index.php">Retour à l'index.</a>
        </footer>
    </body>
</html>
