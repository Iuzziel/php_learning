<?php
if(count($tListe) == 0){
				echo	'<section>Pas de resultat correspondant</section>';
}elseif(count($tListe) == 1){
				require('vues/view_abonnes1.php');
}else{
				require('vues/view_abonnes1.php');
}
?>
