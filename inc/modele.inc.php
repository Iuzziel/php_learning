<?php
	// Fonction : getAnnuaireContent
	// Desc : Lit le contenu du fichier sources
	//        Ce fichier doit contenir des lignes comprenant 3 champs séparés par des ';'
	// IN : Le fichier de données (abonnés) avec son chemin
	// OUT : La liste des abonnés
    function getAnnuaireContent($sFilePath){
        // Controle la présence du fichier sources
        if (!file_exists($sFilePath) || !is_file($sFilePath)){	
            echo 'Erreur "getAnnuaireContent()", Chemin de la source invalide ou fichier inexistant.';
            return null;
        }else{
         // Lecture du contenu du fichier
            $tContentFile = file($sFilePath);
            for ($i=0; $i<count($tContentFile); $i++) {
                $tListe[] = explode(';', $tContentFile[$i]);
            }
            return $tListe;
        }
    }
				
				function ajouterMAJ($sFileData, $sNom, $sPrenom, $sTelephone){
								if (!file_exists($sFileData) || !is_file($sFileData)){	
												echo 'Erreur "getAnnuaireContent()", Chemin de la source invalide ou fichier inexistant.';
												return FALSE;
								}else{
												$file = fopen($sFileData,	"a");
												fwrite($file,	"\r\n".$sNom.";".$sPrenom.";".$sTelephone);
												fclose($file);
												return TRUE;
        }
				}
				
				function recherche($sFileData, $sNom, $sPrenom, $sTelephone){
								$file = file($sFileData);
								$lignRepOk = Array();
								$i=0;
								foreach ($file as $num_ligne => $lignes){
												$element = explode(";", $lignes);
												$premiereRech = TRUE;
												foreach ($element as $key1 => $segment) {
																if($key1 == 0 && $sNom != ""){
																				if(strcasecmp(substr($segment, 0, strlen($sNom)), $sNom) == 0 && $premiereRech){
																								$element[] = $num_ligne;
																								$lignRepOk[$i] = $element;
																								$i++;
																								$premiereRech = FALSE;
																				}
																}elseif($key1 == 1 && $sPrenom != ""){
																				if(strcasecmp(substr($segment, 0, strlen($sPrenom)), $sPrenom) == 0 && $premiereRech){
																								$element[] = $num_ligne;
																								$lignRepOk[$i] = $element;
																								$i++;
																								$premiereRech = FALSE;
																				}
																}elseif($key1 == 2 && $sTelephone != ""){
																				if(strcasecmp(substr($segment, 0, strlen($sTelephone)), $sTelephone) == 0 && $premiereRech){
																								$element[] = $num_ligne;
																								$lignRepOk[$i] = $element;
																								$i++;
																								$premiereRech = FALSE;                    
																				}
																};
												};
								};
								return $lignRepOk;
				};
				
				function modifier($sFileData, $sNom, $sPrenom, $sTelephone, $sNumLigne){
								/*$tZero contient le contenu du fichier avant toute modification a ce moment*/
        $tZero = file($sFileData);
        
								/*Remplacement de la ligne modifiee dans le $tZero*/
        foreach ($tZero as $nLig => $valLig) {
            if($nLig == $sNumLigne){
																$tZero[$nLig] = $sNom.";".$sPrenom.";".$sTelephone."\r\n";
            }
        };
								
								/*Gavage du fichier original avec le tableau modifié
								*cette manip remet le fichier a zero pour le remplir avec le tableau modifie.
								*/
        $fichierModification = fopen($sFileData, "w+");
								foreach	($tZero	as	$valueFZ)	{
            fwrite($fichierModification, $valueFZ);
								}
        fclose($fichierModification);
				};
				
				function supprimerUn($sFileData, $sNumLigne){
								/*$tZero contient le contenu du fichier avant toute modification a ce moment*/
        $tZero = file($sFileData);
								
								/*Gavage du fichier original avec le tableau modifie
								*cette manip remet le fichier a zero pour le remplir avec le tableau modifie.
								*/
        $fichierModification = fopen($sFileData, "w+");
								foreach	($tZero	as	$nLigneFZ => $valueFZ)	{
												if(!($nLigneFZ == $sNumLigne)){
																fwrite($fichierModification, $valueFZ);
												}
								}
        fclose($fichierModification);
				};
?>
