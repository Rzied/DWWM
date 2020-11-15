<?php
include "head.php";
include "header.php";
include "listeDePersonne.php";
echo '<div class="ligne">';
$compteur = 0;
for ($i = 0; $i < count($personne); $i++) {
    echo '<div class="personne colonne">
    <div class="nom">' . $personne[$i]->getNom() . ' ' . $personne[$i]->getPrenom() . '</div>
    <div class="age">Age : ' . $personne[$i]->getAge() . '</div>
    </div>';
    $compteur++;
    if ($compteur == 4) {
        echo '</div>';
        echo '<div class="ligne">';
        $compteur = 0;
    }
}
echo '</div>';
