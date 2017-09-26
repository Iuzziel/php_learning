<?php
	// Appel des fonctions externes
include_once('inc/modele.inc.php');

// Initialisation des variables
$sChoix  = 'accueil';
$sTitre2 = 'Sous Titre par defaut';

$sNom       = '';
$sPrenom    = '';
$sTelephone = '';

$tListe = array();
$sNBAbonnes = 0;
$sNumLigne = -1;
$sMsg = '';
$etapeOk = FALSE;
	
if (isset($_GET['choix'])) $sChoix = $_GET['choix'];

// Récupère les coordonnées de l'abonné en cas d'ajout ou de mise à jour
if (($sChoix == 'ajouterMAJ') 
								|| ($sChoix == 'gestionAbonneMAJ') 
								|| ($sChoix == 'Modifier') 
								|| ($sChoix == 'ModifierMAJ') 
								|| ($sChoix == 'ModifierVAL') 
								//|| ($sChoix == 'Supprimer')
								){
				$sNom = strtoupper($_GET['nom']);
				$sPrenom = ucfirst($_GET['prenom']);
				$sTelephone = $_GET['telephone'];
}
	
// Récupère le numéro de ligne en cas de suppression ou de mise à jour
if ((($sChoix == 'Modifier') 
								|| ($sChoix == 'ModifierMAJ') 
								|| ($sChoix == 'ModifierVAL') 
								|| ($sChoix == 'Supprimer')) && isset($_GET['numLigne']))  $sNumLigne = $_GET['numLigne'];
debug($sDebug, "\$sChoix=".$sChoix,'');
	
// Traitement des données
switch ($sChoix) {
				case 'abonnes1' :
				case 'abonnes2' :
								// Récupère la liste des abonnés
								debug($sDebug, $sFileData,"");
								$tListe = getAnnuaireContent($sFileData);
								debug($sDebug, "\$tListe", $tListe);
								break;
				
				case 'ajouter' :
								$sTitre2 = 'Ajout d\'un abonné';
								break;

				case 'ajouterMAJ' :
								$etapeOk = ajouterMAJ($sFileData, $sNom, $sPrenom, $sTelephone);
								break;
				
				case 'ModifierMAJ' :
				case 'gestionAbonneMAJ' :
								$tListe = recherche($sFileData,	$sNom,	$sPrenom,	$sTelephone);
								break;
				
				case 'ModifierVAL' :
								modifier($sFileData,	$sNom,	$sPrenom,	$sTelephone, $sNumLigne);
								break;
												
				case 'Supprimer' :
								supprimerUn($sFileData, $sNumLigne);
								break;
				
				case 'gestionAbonne' :
								$sTitre2 = 'Modification d\'un abonné';
								break;
}

	// Choix de l'affichage
switch ($sChoix) {
				case 'abonnes1' :
								require('vues/view_abonnes1.php');
								break;

				case 'abonnes2' :
								require('vues/view_abonnes2.php');
								break;

				case 'ajouter' :
				case 'Modifier' :
				case 'gestionAbonne' :
								require('vues/view_formulaire.php');
								break;

				case 'ModifierMAJ' :
				case 'gestionAbonneMAJ' :
								require('vues/view_gestionAbonneMAJ.php');
								break;
				
				case 'ajouterMAJ' :
				case 'ModifierVAL' :
				case 'Supprimer' :
								require('vues/view_resultat.php');
								break;
				
				default :
								require('vues/view_accueil.php');
}
?>
