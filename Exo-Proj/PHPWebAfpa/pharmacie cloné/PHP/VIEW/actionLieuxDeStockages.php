<?php

$mode = $_GET['mode'];

$obj = new Lieuxdestockages($_POST);
// var_dump($obj);
// var_dump($mode);
switch ($mode) {
    case "ajouter":
        {
            LieuxdestockagesManager::add($obj);
            break;
        }
    case "modifier":
        {

            LieuxdestockagesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            LieuxdestockagesManager::delete($obj);
            break;
        }
    }
    header("location:index.php?page=ListeLieuxdeStockages");