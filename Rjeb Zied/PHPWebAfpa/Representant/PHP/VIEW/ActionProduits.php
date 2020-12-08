<?php

$mode = $_GET['mode'];

$obj = new Produits($_POST);
var_dump($mode);
var_dump($obj);
switch ($mode) {
    case "ajouter":
        {
            ProduitsManager::add($obj);
            break;
        }
    case "modifier":
        {
            ProduitsManager::update($obj);
            break;
        }
    case "supprimer":
        {
                ProduitsManager::delete($obj);
            break;
        }
}
header("location:index.php?page=ListeProduits");