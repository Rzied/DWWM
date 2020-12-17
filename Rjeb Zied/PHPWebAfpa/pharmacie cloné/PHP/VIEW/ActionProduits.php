<?php

$mode = $_GET['mode'];

$obj = new Produits($_POST);

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
            $listeCommandes=CommandesManager::getListByProduit($obj);
            foreach ($listeCommandes as $uneCommande)
            {
                $uneCommande->setIdProduit(1);
                CommandesManager::update($uneCommande);
            }
                ProduitsManager::delete($obj);
            break;
        }
}
