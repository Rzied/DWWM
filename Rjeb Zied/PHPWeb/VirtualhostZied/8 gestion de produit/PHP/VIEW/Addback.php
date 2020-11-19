<?php
include "Head.php";
include "Header.php";

$p = new Produits(["libelleProduit" => $_GET['libelleProduit'], "prix" => intval($_GET['prix']), "dateDePeremption" => $_GET['dateDePeremption']]);
$a = ProduitsManager::add($p);
var_dump($p);
var_dump($a);
header("Location:../../page.php");
