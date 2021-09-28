<?php
include "head.php";
include "header.php";
include "listedesemployes.php";

echo '<div class="ligne">
<div class="agence titre">Agence</div>
    <div class="service titre">Service</div>
    <div class="nom titre">Nom</div>
    <div class="prenom titre">Prenom</div>
</div>';
for ($i = 0; $i < count($e); $i++) {
    echo '<a href="detail.php?id=' . $e[$i]->getIdEmploye() . '">
    <div class="cache">' . $e[$i]->getIdEmploye() . ' </div>';

    echo '<div class="ligne">';
    echo '
    <div class="agence">' . $e[$i]->getAgence()->getNom() . '</div>
    <div class="service">' . $e[$i]->getService() . '</div>
    <div class="nom">' . $e[$i]->getNom() . '</div>
    <div class="prenom">' . $e[$i]->getPrenom() . '</div>
    </a>';
    echo '</div>';
}
