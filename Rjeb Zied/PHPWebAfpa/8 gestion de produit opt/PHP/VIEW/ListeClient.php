<?php
echo '<div class="container">
<div class="espace"></div>
<div class="liste colonne">
<div class="titre2"><h2>Liste des Clients</h2></div>
<a href="page.php?code=formClient&mode=ajout">
<div class="bouton ajo">Ajouter un Client</div></a>
    <div class="contenue colonne">';
$tableau = ClientsManager::getList();
foreach ($tableau as $unClient) {
    echo '<div class="ligne">
    <div class="produit">';
    echo $unClient->getNomClient() .' '. $unClient->getPrenomClient().'<br>';
    echo '</div>
    <a href="page.php?code=formClient&mode=edit&id=' . $unClient->getIdClient() . '"><div class="bouton det">Detail</div></a>
    <a href="page.php?code=formClient&mode=modif&id=' . $unClient->getIdClient() . '"><div class="bouton mod">Modifier</div></a>
    <a href="page.php?code=formClient&mode=delete&id=' . $unClient->getIdClient() . '"><div class="bouton sup">Supprimer</div></a>
    </div>';
}
echo '</div>   </div>

<div class="espace"></div>

</div>

<div class="btnr"><a href="page.php">Retour</a></div>';

include "PHP/VIEW/Footer.php";
