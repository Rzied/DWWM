<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

/*

// ****************************************** MAIN 1 ****************************************
// ********* 1 *********
$d1=new Document(["Auteur"=>"Greg Bear","Titre"=>"Héritage","estEmprunte"=>strtoupper("non")]);
$d2=new Document(["Auteur"=>"Frank Herbert","Titre"=>"Dosadi","estEmprunte"=>strtoupper("oui")]);
$d3=new Document(["Auteur"=>"Guillaume Musso","Titre"=>"Sauve-moi","estEmprunte"=>strtoupper("non")]);

echo "\n",$d1->toString();
echo "\n",$d2->toString();
echo "\n",$d3->toString();
echo "\n";
// var_dump( $d3->equalsTo($d4));

// ********* 2 *********

$a1=new Auteur(["Nom"=>"Hugo","Prenom"=>"Victor","dNais"=>new DateTime("26-02-1802"),"dDeces"=>new DateTime("22-05-1885")]);
$a2=new Auteur(["Nom"=>"Camus","Prenom"=>"Albert","dNais"=>new DateTime("07-11-1913"),"dDeces"=>new DateTime("04-01-1960")]);

echo $a1->toString(),"\n";
echo $a2->toString(),"\n";
// var_dump( $a2->equalsTo($a3));

 */

// ****************************************** MAIN 2 ****************************************
// Exooooo 3

// LES AUTEURS
$a1 = new Auteur(["Nom" => "Hugo", "Prenom" => "Victor", "dNais" => new DateTime("26-02-1802"), "dDeces" => new DateTime("22-05-1885")]);
$a2 = new Auteur(["Nom" => "Camus", "Prenom" => "Albert", "dNais" => new DateTime("07-11-1913"), "dDeces" => new DateTime("04-01-1960")]);
$a3 = new Auteur(["Nom" => "Zola", "Prenom" => "Émile ", "dNais" => new DateTime("02-04-1840"), "dDeces" => new DateTime("29-09-1902")]);

// Les DOCUMENTS
$d1 = new Document(["Auteur" => $a1, "Titre" => "Héritage", "estEmprunte" => strtoupper("non")]);
$d2 = new Document(["Auteur" => $a2, "Titre" => "Dosadi", "estEmprunte" => strtoupper("oui")]);
$d3 = new Document(["Auteur" => $a3, "Titre" => "Sauve-moi", "estEmprunte" => strtoupper("non")]);

echo "\n", $d1->toString();
echo "\n", $d2->toString();
echo "\n", $d3->toString();
echo "\n";
var_dump($d3->equalsTo($d2));

// echo $a1->toString(),"\n";
// echo $a2->toString(),"\n";
// // var_dump( $a2->equalsTo($a3));

// Les LIVRES
$l1 = new Livre(["Titre" => "Heritage", "Auteur" => $a1, "nbPage" => 430]);
echo "\n--Le livre :", $l1->toString();
echo "\n";
// Les ENREGISTREMENTS
$En1 = new Enraudio(["Titre" => "Espionnage","Duree"=>"1 Heure", "Auteur" => $a2]);
echo "\n--L'enregistrement : ", $En1->toString();
echo "\n";
// Les ENREGISTREMENTS
$V1 = new Enraudio(["Titre" => "Guerre","Duree"=>"3 Heure", "Auteur" => $a3]);
echo "\n--Video : ", $V1->toString();
