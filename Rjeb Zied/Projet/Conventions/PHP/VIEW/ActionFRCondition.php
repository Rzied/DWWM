<?php
var_dump($_POST);
$idStage=1;
// for ($i=1; $i <7 ; $i++) { 
//     $libelle=LibellesHorairesManager::getByLibelle("horaireDebutJour".$i);
//     var_dump($libelle);
//     $time=$_POST["horaireDebutJour".$i];
//     var_dump($time);
//     $valeur=new ValeursHoraires(["idStage"=>$idStage,"idLibelleHoraire"=>$libelle->getIdLibelleHoraire(),"valeurHoraire"=>$time]);
//     ValeursHorairesManager::add($valeur);
    
//     $libelle=LibellesHorairesManager::getByLibelle("horaireFinJour".$i);
//     $time=$_POST["horaireFinJour".$i];
//     $valeur=new ValeursHoraires(["idStage"=>$idStage,"idLibelleHoraire"=>$libelle->getIdLibelleHoraire(),"valeurHoraire"=>$time]);
//     ValeursHorairesManager::add($valeur);
    
//     $libelle=LibellesHorairesManager::getByLibelle("horaireDebutDej".$i);
//     $time=$_POST["horaireDebutDej".$i];
//     $valeur=new ValeursHoraires(["idStage"=>$idStage,"idLibelleHoraire"=>$libelle->getIdLibelleHoraire(),"valeurHoraire"=>$time]);
//     ValeursHorairesManager::add($valeur);
    
//     $libelle=LibellesHorairesManager::getByLibelle("horaireFinDej".$i);
//     $time=$_POST["horaireFinDej".$i];
//     $valeur=new ValeursHoraires(["idStage"=>$idStage,"idLibelleHoraire"=>$libelle->getIdLibelleHoraire(),"valeurHoraire"=>$time]);
//     ValeursHorairesManager::add($valeur);
// }

// $libelle=LibellesHorairesManager::getByLibelle("horaireDebutJour1");
// var_dump($libelle);
// $time=$_POST["horaireDebutJour1"];
// var_dump($time);

    // gerer le lieu de realisation !

        $lieuRealisation="";
    for ($i=1; $i < 5; $i++) { 
        if (isset($_POST["lieuRealisation".$i])) {
            var_dump(($_POST["lieuRealisation".$i]));
            if (strlen($lieuRealisation)>1 and strlen(($_POST["lieuRealisation".$i])>1)) {
              $lieuRealisation=$lieuRealisation.", ".$_POST["lieuRealisation".$i];
            }else{
                $lieuRealisation=$lieuRealisation.$_POST["lieuRealisation".$i];
            }
            
        }
        
        var_dump($lieuRealisation);
    }

    // gerer le deplacement oui ou non !
    if ($_POST["deplacement"]=="OUI") {
        $deplacement=1;
    }else {
        $deplacement=0;
    }
    // $deplacement=$_POST["deplacement"];
    var_dump($deplacement);


    // gerer la frequence de deplacement !
    // $frequenceDeplacement="";
    // for ($i=1; $i <5 ; $i++) { 
        if (condition) {
            # code...
        }
           var_dump($_POST["frequenceDeplacement"]);
           $frequenceDeplacement=$_POST["frequenceDeplacement"];
       
    // }
    var_dump($frequenceDeplacement);








?>