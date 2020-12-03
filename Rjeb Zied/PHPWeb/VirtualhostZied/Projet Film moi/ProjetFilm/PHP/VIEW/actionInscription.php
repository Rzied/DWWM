<?php
var_dump($_POST);
if ($_POST['passUtilisateur'] == $_POST['confirmation'])
{
    // recherche si le pseudo existe
    $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
    if ($uti == false)
    {
        $u = new Utilisateurs($_POST);
        //encodage du mot de passe
        $u->setPassUtilisateur(md5($u->getPassUtilisateur()));
        UtilisateursManager::add($u);
    }
    else
    {
        echo "le pseudo existe deja";
    }
}
else
{
    echo "la confirmation ne correspond pas au mot de passe";
}
