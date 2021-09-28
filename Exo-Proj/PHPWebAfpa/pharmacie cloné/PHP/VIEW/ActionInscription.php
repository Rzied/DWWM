<?php

if($_POST['motDePasseUser'] == $_POST['confirmationMotDePasse'])
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
}
else
{
    echo'La confirmation ne correspond pas au mot de passe';
}