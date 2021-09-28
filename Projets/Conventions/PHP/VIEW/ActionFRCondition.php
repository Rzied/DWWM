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
    for ($i=1; $i < 4; $i++) { 
        if (isset($_POST["lieuRealisation".$i])) {
              $lieuRealisation=$lieuRealisation.$_POST["lieuRealisation".$i].", ";
        }
        var_dump($lieuRealisation);
    }
    if (isset($_POST["lieuRealisation5"]) && $_POST["lieuRealisation5"]!="") {
        $lieuRealisation=$lieuRealisation.$_POST["lieuRealisation5"];
  }else {
      $lieuRealisation=substr($lieuRealisation,0,strlen($lieuRealisation)-2);
  }
        var_dump($lieuRealisation);
   


    // gerer le deplacement oui ou non !
    if ($_POST["deplacement"]=="OUI") {
        $deplacement=1;
        if ($_POST["frequenceDeplacement"]!="autre") {
                var_dump($_POST["frequenceDeplacement"]);
            $frequenceDeplacement=$_POST["frequenceDeplacement"];
            }else {
                $frequenceDeplacement=$_POST["frequenceDeplacement1"];
            }
    }   else {
        $deplacement=0;
    }
    var_dump($deplacement);
    var_dump($frequenceDeplacement);
    $modeDeplacement="";
    // gerer le mode deplacement !
        for ($i=1; $i <3 ; $i++) { 
            if (isset($_POST["modeDeplacement".$i])) {
            $modeDeplacement=$modeDeplacement.$_POST["modeDeplacement".$i].", ";
            }
        }
            if (isset($_POST["modeDeplacement4"]) && $_POST["modeDeplacement4"]!="") {
                $modeDeplacement=$modeDeplacement.$_POST["modeDeplacement4"];
            }else {
              $modeDeplacement=substr($modeDeplacement,0,strlen($modeDeplacement)-2);
            }
        var_dump($modeDeplacement);


  // gerer la demande d'attestation de formation règlementaire !
  
        if ($_POST["attFormReglement"]=="OUI") {
            $attFormReglement=1;
            var_dump($attFormReglement);
            $libelleAttFormReg=$_POST["libelleAttFormReg"];
            var_dump($libelleAttFormReg);
        }else {
            $attFormReglement=0;
        }
        

// gerer la visite médicale d'aptitude !
        if ($_POST["visiteMedical"]=="OUI") {
            $visiteMedical=1;
        }else {
            $visiteMedical=0;
        }
        var_dump($visiteMedical);


// gerer les travaux dangereux !
        if ($_POST["travauxDang"]=="OUI") {
            $travauxDang=1;
        }else {
            $travauxDang=0;
        }
        var_dump($travauxDang);
        $td="";
        for ($i=1; $i <16 ; $i++) { 
            if (isset($_POST["td".$i])) {
              var_dump($_POST["td".$i]);
            $td=$td.$_POST["td".$i].", ";
            }
            
        }
        $td=substr($td,0,strlen($td)-2);
        var_dump($td);

        //******************************* */

        $test=StagesManager::findById(1);
        var_dump($test);
        $stage = new Stages($_POST);
        var_dump($stage);
        $stage->setIdStage(1);
        $stage->setEtape($test->getEtape());
        $stage->setDateVisite($test->getDateVisite());
        $stage->setNomVisiteur($test->getNomVisiteur());
        $stage->setLieuRealisation($lieuRealisation);
        $stage->setDeplacement($deplacement);
        $stage->setFrequenceDeplacement($frequenceDeplacement);
        $stage->setModeDeplacement($modeDeplacement);
        $stage->setAttFormReglement($attFormReglement);
        $stage->setLibelleAttFormReg($libelleAttFormReg);
        $stage->setVisiteMedical($visiteMedical);
        $stage->setTravauxDang($travauxDang);
        $stage->setDateDeclarationDerog($test->getDateDeclarationDerog());
        $stage->setSujetStage($test->getSujetStage());
        $stage->setTravauxRealises($test->getTravauxRealises());
        $stage->setObjectifPAE($test->getObjectifPAE());
        $stage->setDateDebut($test->getDateDebut());
        $stage->setDateFin($test->getDateFin());
        $stage->setIdTuteur($test->getIdTuteur());
        $stage->setIdStagiaire($test->getIdStagiaire());

        var_dump($stage);
        StagesManager::update($stage);



?>