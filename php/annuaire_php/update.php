<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">	
        <link rel="stylesheet" type="text/css" media="screen" href="../css/annuaire.css" />
        <title>login</title>
    </head>
    <body>
        <header>
            <h2>Modifier un contact</h2>
        </header>
        <section>
            <form action="../php/annuaire_php/search.php" method="post">
                Nom : <input name="nom" /><br />
                Prénom : <input name="prenom" /><br />
                Téléphone : <input name="telephone" pattern="\d{10}" /><br />
                <input type="submit" value="Rechercher"/>
            </form>
        </section>
        <footer>
            <a href="/DL101-PHP/html/annuaire_index.html">Retour à l'index.</a>
        </footer>
    </body>
</html>