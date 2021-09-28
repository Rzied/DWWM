<?php
$mode = $_GET['mode'];
$obj = new Roles($_POST);

switch ($mode) {
    case "ajouter":
        {
            RolesManager::add($obj);
            break;
        }
    case "modifier":
        {
            RolesManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $listeUsers = UsersManager::getListByRole($obj);
            foreach ($listeUsers as $unUser)
            {
                $unUser->setIdRole(1);
                UsersManager::update($unUser);
            }
            RolesManager::delete($obj);
            break;
        }
}
header("location:index.php?page=ListeRoles");
