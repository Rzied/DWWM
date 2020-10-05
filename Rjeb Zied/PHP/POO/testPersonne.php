<?php

require "Personne.Class.php";
require "Voiture.Class.php";



$v1 = new Voiture(["marque"=>"Audi","modele"=>"A3","immatriculation"=>"12df12f","couleur"=>"noire","kilometres"=>20000]);
$v2 = new Voiture(["marque"=>"Audi","modele"=>"Q3","truc"=>"test"]);
// $p1 = new Personne("Dupond","Toto",$v2);

var_dump($v2);
var_dump($v1);
// echo "la marque de la voiture de toto est ". $p1->getVoiture()->getMarque();


$p1 = new Personne("Rjeb", "Zied", 29, "Male",$v1);
var_dump($p1);