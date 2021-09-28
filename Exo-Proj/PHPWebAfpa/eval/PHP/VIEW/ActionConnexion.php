<?php

$utilisateur=UtilisateursManager::findByLogin($_POST['login']);
if ($utilisateur != false)
{
    if (crypte($_POST['motDePasse']) == $utilisateur->getMotDePasse())
    {
        echo 'connection reussie';
        $_SESSION['utilisateur']=$utilisateur;
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