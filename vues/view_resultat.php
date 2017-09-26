<section>
<?php if($etapeOk && $sChoix == "ajouterMAJ") : ?>
				<p>Enregistrement de <?=$sNom." ".$sPrenom." n°:".implode("-", str_split(trim($sTelephone), 2))?> réussi</p>
<?php elseif($sChoix == "ModifierVAL") :?>
				<p>Modification réussie.</p>
<?php elseif($sChoix == "Supprimer") :?>
				<p>Suppression réussie.</p>
<?php else : ?>
				<p>Echec</p>
<?php endif; ?>
</section>
<section>
				<a href="index.php?choix=ajouter">Nouveau contact</a><br />
				<a href="index.php?choix=gestionAbonne">Recherche</a><br />
				<a href="index.php?choix=abonnes1">Liste</a><br />
</section>

