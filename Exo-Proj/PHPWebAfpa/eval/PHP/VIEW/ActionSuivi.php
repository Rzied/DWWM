<?php

$mode = $_GET['mode'];

$obj = new Suivi($_POST);

switch ($mode) {
    case "ajouter":
        {
            SuiviManager::add($obj);
            break;
        }
    case "modifier":
        {
            SuiviManager::update($obj);
            break;
        }
    case "supprimer":
        {
                SuiviManager::delete($obj);
            break;
        }
}
header("location:index.php?page=ListeSuivi");