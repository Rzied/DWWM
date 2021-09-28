<?php
switch ($_GET['mode']) {
    case "ajoutClient":
        {
            $p = new Clients(["nomClient" => $_POST["nomClient"], "prenomClient" => $_POST["prenomClient"], "dateDeNaissance" => $_POST["dateDeNaissance"]]);
            /* on peut simplifier l'écriture car $_POST est un tableau associatif. Les clés sont les name du formulaire. */
            // $p = new Produits($_POST);
            ClientsManager::add($p);
            break;
        }
    case "modifClient":
        {
            $p = new Clients($_POST);
            ClientsManager::update($p);
            break;
        }
    case "delClient":
        {
            $p = new Clients($_POST);
            ClientsManager::delete($p);
            break;
        }
}

header("location:page.php?code=listeClient");