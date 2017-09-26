<section>
    <?php foreach ($tListe as $liste) : ?>
        <ul>
												<li>Nom: <?php echo $liste[0] ?></li>
												<li>Prénom: <?php echo $liste[1] ?></li>
												<li>Téléphone: <?php echo implode("-", str_split(trim($liste[2]), 2)) ?></li>
												<?php if(isset($liste[3])) : ?><!--Si $liste[3] existe c'est que l'on vient de gestionAbonne-->
												<form action="index.php" method="get">
																<li>
																				<button type="submit" name="choix" value="Modifier">Modifier</button>
																				<button type="submit" name="choix" value="Supprimer">Supprimer</button>
																				<input type="hidden" name="nom" value="<?php echo $liste[0] ?>">
																				<input type="hidden" name="prenom" value="<?php echo $liste[1] ?>">
																				<input type="hidden" name="telephone" value="<?php echo trim($liste[2]) ?>">
																				<input type="hidden" name="numLigne" value="<?php echo $liste[3] ?>">
																</li>
												</form>
												<?php endif; ?>
        </ul>
    <?php endforeach; ?>
</section>
