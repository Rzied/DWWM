<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$date1 = new DateTime("30-12-2020");
$date3 = new DateTime("30-10-2002");
$date4 = new DateTime("10-05-1999");
$date5 = new DateTime("15-12-2015");
$e1 = new Employe(["nom" => "Rjeb", "prenom" => "Zied", "dateEmbauche" => $date1, "fonction" => "dev", "SalaireAnnuel" => 50, "service" => "informatique"]);
$e2 = new Employe(["nom" => "Aarous", "prenom" => "Sofiane", "dateEmbauche" => new DateTime("30-11-2010"), "fonction" => "GENDARME", "SalaireAnnuel" => 10, "service" => "Défense"]);
$e3 = new Employe(["nom" => "Balair", "prenom" => "Quentin", "dateEmbauche" => $date3, "fonction" => "animateur", "SalaireAnnuel" => 20, "service" => "loisir"]);
$e4 = new Employe(["nom" => "Cugny", "prenom" => "Maxime", "dateEmbauche" => $date4, "fonction" => "ecrivain", "SalaireAnnuel" => 25, "service" => "litterature"]);
$e5 = new Employe(["nom" => "Courquin", "prenom" => "Pierre", "dateEmbauche" => $date5, "fonction" => "Psychologue", "SalaireAnnuel" => 15, "service" => "Médico-social"]);
$liste = [$e1, $e2, $e3, $e4, $e5];

//Ordre de transfert
$dateAujourdhui = new DateTime('now');
// $annee = $dateAujourdhui->format('Y');
// $jourDePrime = new DateTime('30-11-' . $annee);
$jourDePrime = (new DateTime())->setDate($dateAujourdhui->format('Y'), 11, 30);
echo "Jour de prime :\n";
var_dump($jourDePrime);
echo "Jour aujourd'hui :\n";
var_dump($dateAujourdhui);

if ($jourDePrime < $dateAujourdhui) { //on compare les dates
    echo "L'ordre de transfert a été envoyé à la banque :" . $e1->prime();
} else {
    echo "L'ordre de transfert n'a pas été envoyé à la banque\n";
}
echo "Le nombre d’employés de l’entreprise est : ", Employe::getCompteur();
asort($liste);

foreach ($liste as $key) {
    echo $key->toString();
}

$a[]=new Agence(["nomAgence"=>"Codeours","adress"=>"40, rue Paul Bousquet","codePostal"=>"18273","ville"=>"Paris"]);
$a[]=new Agence(["nomAgence"=>"Codenid","adress"=>"603, chemin de Louis","codePostal"=>"88839","ville"=>"Marseille"]);
$a[]=new Agence(["nomAgence"=>"Smashcode","adress"=>"8, avenue Muller","codePostal"=>"33406","ville"=>"Lyon"]);
$a[]=new Agence(["nomAgence"=>"Codefeu","adress"=>"3, rue Potier","codePostal"=>"67238","ville"=>"Nice"]);
$a[]=new Agence(["nomAgence"=>"codevoie","adress"=>"2, boulevard Ramos","codePostal"=>"85835","ville"=>"Lille"]);

