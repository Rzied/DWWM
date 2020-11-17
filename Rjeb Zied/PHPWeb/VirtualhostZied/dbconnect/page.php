<?php
include "personne.Class.php";

try {
    $db = new PDO('mysql:host=localhost;dbname=dbConnect;charset=utf8', 'root', '');
} catch (Exception $e) {
    if ($e->getCode() == 1049) {
        echo 'Base de donnée indispo';
        die();
    } elseif ($e->getCode() == 1045) {
        echo 'La connexion a echoué !';
        die();
    } else {
        die('Erreur : ' . $e->getMessage());
    }
}

echo "on est connecté à la base de données";

$requete=$db->query("SELECT idPersonne, nom, prenom, age FROM personnes where idPersonne=1");  // $requete est un objet de type PDO_Statement
$reponse = $requete->fetch(PDO::FETCH_ASSOC);
var_dump($reponse);
$pers = new Personne($reponse);
var_dump($pers);
$pers->affichage();