<?php

$mode = $_GET['mode'];

$obj = new Eleves($_POST);

switch ($mode) {
    case "ajouter":
        {
            ElevesManager::add($obj);
            break;
        }
    case "modifier":
        {
            ElevesManager::update($obj);
            break;
        }
    case "supprimer":
        {
                ElevesManager::delete($obj);
            break;
        }
}
header("location:index.php?page=ListeEleve");