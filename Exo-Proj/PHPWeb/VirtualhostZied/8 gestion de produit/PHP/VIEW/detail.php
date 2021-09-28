<?php
include "Head.php";
include "Header.php";
$idProduit=$_GET['id'];

echo '<div class="contenue">';
$q=ProduitsManager::findById($idProduit);
echo '<div class="case">'. $idProduit.'</div>';
echo '<div class="case">'. $q->getLibelleProduit().'</div>';
echo '<div class="case">'.$q->getPrix().'</div>';
echo '<div class="case">'.$q->getDateDePeremption().'</div>';
echo '</div>';