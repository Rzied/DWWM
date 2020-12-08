<?php

$mode = $_GET['mode'];

$obj = new Users($_POST);

switch ($mode) {
    case "ajouter":
        {
            
    $user= UsersManager::findByPseudo($_POST['pseudoUser']);
    if($user==false)
    {
        $u= new Users($_POST);
        $u->setMotDePasseUser(crypte($u->getMotDePasseUser()));
        UsersManager::add($u);
    }
    else
    {
        echo'Le pseudo existe déjà';
    }

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
header("location:index.php?page=ListeUsers");