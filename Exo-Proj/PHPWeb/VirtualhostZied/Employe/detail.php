<?php
include "head.php";
include "header.php";
include "listedesemployes.php";

$idRecherche = $_GET['id'];
foreach ($e as $unePersonne)
{
    if ($unePersonne->getIdEmploye() == $idRecherche)
    {
        echo '<div class="ligneDe">';

        echo '<div class="sousTi">Information</div>
        <div class="contenue">'.
        'Embauché le '.$unePersonne->getDateEmbauche()->format('y/m/d').' <br>'.
        'Poste :  '.$unePersonne->getFonction().' <br>'.
        'Salaire :  '.$unePersonne->getSalaireAnnuel().' <br>
        </div>';
        // echo <div class="sousTi">
        // echo <div class="sousTi">
        // echo <div class="sousTi">

        echo '</div>';
    }
}


echo '<a href="page.php">Retour</a>';