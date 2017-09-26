<section>
				<form action="index.php" method="get">
								<input type="hidden" name="choix" value="<?php if(isset($sNumLigne) && $sNumLigne != -1){echo $sChoix."VAL";}else{echo $sChoix."MAJ";};?>"/>
								Nom : <input name="nom" pattern="^[\w| |-]*" 
												<?php if($sChoix == "ajouter"){echo "required";}elseif($sChoix == "Modifier"){echo "value=\"$sNom\"";}; ?> /><br />
								Prénom : <input name="prenom" pattern="^[\w| |-]*" 
												<?php if($sChoix == "ajouter"){echo "required";}elseif($sChoix == "Modifier"){echo "value=\"$sPrenom\"";}; ?> /><br />
								Téléphone : <input name="telephone" pattern="\d{10}" 
												<?php if($sChoix == "ajouter"){echo "required";}elseif($sChoix == "Modifier"){echo "value=\"$sTelephone\"";}; ?> /><br />
								<?php if(isset($sNumLigne) && $sNumLigne != -1){echo '<input type="hidden" name="numLigne" value="'.$sNumLigne.'" />';}; ?>
								<input type="submit" />
				</form>
</section>
