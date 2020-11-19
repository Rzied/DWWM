<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

//on affiche la liste des produits
// echo "Liste des articles" . '<br>';
echo '<div class="container">
<div class="espace"></div>
<div class="liste colonne">
<div class="titre2"><h2>Liste des articles</h2></div>
<a href="./PHP/VIEW/ajouter.php">
<div class="bouton ajo">Ajouter un produit</div></a>
    <div class="contenue colonne">';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit) {
    echo '<div class="ligne">
    <div class="produit">';
    echo $unProduit->getLibelleProduit() . '<br>';
    echo'</div>
    <a href="./PHP/VIEW/detail.php?id='.$unProduit->getIdProduit().'"><div class="bouton det">Detail</div></a>
    <a href="./PHP/VIEW/modifier.php?id='.$unProduit->getIdProduit().'"><div class="bouton mod">Modifier</div></a>
    <a href="./PHP/VIEW/supprimer.php?id='.$unProduit->getIdProduit().'"><div class="bouton sup">Supprimer</div></a>
    </div>';
}


echo '</div>   </div>

<div class="espace"></div>
</div>';


include "PHP/VIEW/Footer.php";




// </div>
// <div class="menue">
// <div class="bouton"></div>
// <div class="bouton"></div>
// <div class="bouton"></div>
// </div>