<?php

$user=UsersManager::findByPseudo($_POST['pseudoUser']);
if ($user != false)
{
    if (crypte($_POST['motDePasseUser']) == $user->getMotDePasseUser())
    {
        echo 'connection reussie';
        $_SESSION['user']=$user;
        header("Location:index.php?page=Accueil");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:3;url=index.php?page=FormulaireConnexion");
    }
}
else
{
    echo "le pseudo n'existe pas";
    header("refresh:3;url=index.php?page=FormulaireConnexion");
}