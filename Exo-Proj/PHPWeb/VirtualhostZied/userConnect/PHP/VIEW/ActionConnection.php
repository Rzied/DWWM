<?php
$uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
if ($uti != false)
{
    // echo "motBDD ".$uti->getMotDePasse()."  saisi". $_POST['motDePasse']. "crypte   ".crypte($_POST['motDePasse'])."<br>";
    if (crypte($_POST['motDePasse']) == $uti->getMotDePasse())
    {
        echo 'connection reussie';
        $_SESSION['utilisateur']=$uti;
        header("refresh:3;url=index.php?codePage=accueil");
    }
    else
    {
        echo 'le mot de passe est incorrect';
        header("refresh:3;url=index.php?codePage=connection");
    }
}
else
{
    echo "le pseudo n'existe pas";
    header("refresh:3;url=index.php?codePage=connection");
}
