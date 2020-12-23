<?php
$mode = $_GET['mode'];
var_dump($_POST);
$obj = new Commandes($_POST);
var_dump($obj);
switch ($mode) {
    case "ajouter":
        {
            CommandesManager::add($obj);
            break;
        }
    case "modifier":
        {
            CommandesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $listeUsers = UsersManager::getListByCommande($obj);
            foreach ($listeUsers as $unUser)
            {
                $unUser->setIdCommande(1);
                UsersManager::update($unUser);
            }
            CommandesManager::delete($obj);
            break;
        }
}
// header("location:index.php?page=ListeCommandes");
