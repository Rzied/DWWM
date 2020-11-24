<?php

echo '<div class="container">
<div class="espace"></div>
<div class="liste colonne">
<div class="titre2"><h2>Liste des articles</h2></div>
<a href="page.php?code=formProduit&mode=ajout">
<div class="bouton ajo">Ajouter un produit</div></a>
    <div class="contenue colonne">';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit) {
    echo '<div class="ligne">
    <div class="produit">';
    echo $unProduit->getLibelleProduit() . '<br>';
    echo '</div>
    <a href="page.php?code=formProduit&mode=edit&id=' . $unProduit->getIdProduit() . '"><div class="bouton det">Detail</div></a>
    <a href="page.php?code=formProduit&mode=modif&id=' . $unProduit->getIdProduit() . '"><div class="bouton mod">Modifier</div></a>
    <a href="page.php?code=formProduit&mode=delete&id=' . $unProduit->getIdProduit() . '"><div class="bouton sup">Supprimer</div></a>
    </div>';
}

echo '</div>   </div>

<div class="espace"></div>

</div>

<div class="btnr"><a href="page.php">Retour</a></div>';

include "PHP/VIEW/Footer.php";
