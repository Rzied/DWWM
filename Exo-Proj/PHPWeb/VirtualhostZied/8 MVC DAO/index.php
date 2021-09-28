<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

/* Test Manager */

// on teste la recherche par ID
echo 'recherche id= 1'. '<br>';
$p = ProduitsManager::findById(1);
$p1 =ClientsManager::findById(1);
var_dump($p);
var_dump($p1);

// on teste l'ajout
echo "ajout d'un Produit".'<br>';
$pNew= new Produits (["libelleProduit" => "cahier", "prix" => 5, "dateDePeremption" => '2020-12-31']);
ProduitsManager::add($pNew);
$pNew1= new Clients (["nomClient" => "poix", "prenomClient" => "Martine", "dateDePeremption" => '1980-05-31']);
ClientsManager::add($pNew1);

//on affiche la liste des produits
echo "Liste des articles" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}
$tableau1 = ClientsManager::getList();
foreach ($tableau1 as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

// on teste la mise à jour
echo "on met à jour l'id 1" . '<br>';
$p->setLibelleProduit($p->getLibelleProduit() . 'sss');
ProduitsManager::update($p);
$pRecharge = ProduitsManager::findById(1);
var_dump($pRecharge);

$p1->setNomClient($p1->getNomClient() . 'xxx');
ClientsManager::update($p1);
$pRecharge1 = ClientsManager::findById(1);
var_dump($pRecharge1);

// on teste la suppression
echo "on supprime un article" . '<br>';
$pSuppr = ProduitsManager::findById(1);
ProduitsManager::delete($pSuppr);
$pSuppr1 = ClientsManager::findById(1);
ClientsManager::delete($pSuppr1);

//on affiche la liste des produits
echo "liste des articles" . '<br>';
$tableau = ProduitsManager::getList();
foreach ($tableau as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

$tableau1 = ClientsManager::getList();
foreach ($tableau1 as $unProduit)
{
    echo $unProduit->toString() . '<br>';
}

include "PHP/VIEW/Footer.php";
