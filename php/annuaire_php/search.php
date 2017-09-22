<?php
    $recherche[0] = $_POST["nom"];
    $recherche[1] = $_POST["prenom"];
    $recherche[2] = $_POST["telephone"];
    
    $file = file("../../data/annuaire.txt");
    sort($file);
    $i = 0;
    $lignRepOk="";
    $tabReponse="";
    
    foreach ($file as $num_ligne => $lignes){
        $ligne = explode(";", $lignes);
        foreach ($ligne as $key1 => $segment) {
            if($key == 0 && $recherche[0] != ""){
                $lignRepOk[$i] = $num_lignes;
                $i++;
            }elseif($key == 1 && $recherche[1] != ""){
                $lignRepOk[$i] = $num_lignes;
                $i++;
            }elseif($key == 2 && $recherche[2] != ""){
                $lignRepOk[$i] = $num_lignes;
                $i++;
            };
        };
    };
    
    foreach ($lignRepOk as $key2 => $val){
        $tabReponse[$key2] = $file[$val];
    };
    
    var_dump($tabReponse);
    
    if(isset($_POST["supprimer"])){
        
    };
    if(isset($_POST["modifier"])){
        
    };
?>

