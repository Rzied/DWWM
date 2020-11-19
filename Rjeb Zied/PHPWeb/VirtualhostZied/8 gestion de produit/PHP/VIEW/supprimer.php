<?php
include "Head.php";
include "Header.php";


$idProduit=$_GET['id'];
$produit=ProduitsManager::findById($idProduit);
var_dump($produit);
ProduitsManager::delete($produit);

header("Location:../../page.php");

