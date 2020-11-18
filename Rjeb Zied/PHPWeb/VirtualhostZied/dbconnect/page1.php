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

// $requete=$db->query("SELECT idPersonne, nom, prenom, age FROM personnes where idPersonne=1");  // $requete est un objet de type PDO_Statement
// $reponse = $requete->fetch(PDO::FETCH_ASSOC);
// var_dump($reponse);
// $pers = new Personne($reponse);
// var_dump($pers);
// $pers->affichage();


/********************************************/
/*****  REQUETE AVEC RESULTAT MULTIPLE  *****/
/********************************************/

// $requete = $db->query("SELECT idPersonne, nom, prenom, age FROM personnes "); // $requete est un objet de type PDO_Statement
// while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// // il s'arrete quand fetch renvoi false
// {
//     var_dump($donnees);
//     $personnes[] = new Personne($donnees);
// }
// var_dump($personnes);


/********************************************/
/*****      REQUETE d'AJOUT SIMPLE      *****/
/********************************************/
// $q = $db->exec('INSERT INTO personnes(nom, prenom, age) VALUES("dupont","toto",20)');
// //$q contient le nombre de ligne impactée ou false si la requete a echouée
// var_dump($q);


/********************************************/
/*****     REQUETE d'AJOUT PARAMETRE    *****/
/********************************************/

//on crée un objet
$perso = new Personne(["nom"=>"Dupond","prenom"=>"titi","age"=>21]);

//on prepare la requete
// :nom est une variable SQL
$q = $db->prepare('INSERT INTO personnes(nom, prenom, age) VALUES(:nom, :prenom, :age)');

// Assignation des valeurs pour le nom, le pr�nom.
$q->bindValue(':nom', $perso->getNom());
$q->bindValue(':prenom', $perso->getPrenom());
$q->bindValue(':age', $perso->getAge());

// Ex�cution de la requ�te.
$reponse = $q->execute();
var_dump($reponse);