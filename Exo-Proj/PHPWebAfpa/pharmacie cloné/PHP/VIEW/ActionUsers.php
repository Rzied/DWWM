<?php

$mode = $_GET['mode'];

$obj = new Users($_POST);

switch ($mode) {
    case "ajouter":
        {
            UsersManager::add($obj);
            break;
        }
    case "modifier":
        {

            UsersManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $test = UsersManager::delete($obj);
            break;
        }
}