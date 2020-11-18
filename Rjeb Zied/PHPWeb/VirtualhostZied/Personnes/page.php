<?php
include "head.php";
include "header.php";
include "listeDePersonne.php";
echo '<div class="ligne">';
$compteur = 0;
for ($i = 0; $i < count($personne); $i++) {
    echo '<div class="personne colonne">
    <a href="detail.php?id=' . $personne[$i]->getId(). '">
    <div class="cache">' . $personne[$i]->getId() . '</div>
    <div class="nom">' . $personne[$i]->getNom() . ' ' . $personne[$i]->getPrenom() . '</div>
    </a>
    </div>';
    $compteur++;
    if ($compteur == 4) {
        echo '</div>';
        echo '<div class="ligne">';
        $compteur = 0;
    }
}
echo '</div>';
