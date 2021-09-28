<?php

$mode = $_GET['mode'];

$obj = new Utilisateurs($_POST);
var_dump($mode);
var_dump($obj);
switch ($mode) {
    case "ajouter":
        {
            UtilisateursManager::add($obj);
            break;
        }
    case "modifier":
        {
            UtilisateursManager::update($obj);
            break;
        }
    case "supprimer":
        {
                UtilisateursManager::delete($obj);
            break;
        }
}
header("location:index.php?page=ListeUtilisateur");