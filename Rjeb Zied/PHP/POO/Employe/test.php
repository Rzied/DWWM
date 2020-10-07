<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");


$a1 = new Agence(["nomAgence" => "Codeours", "adress" => "40, rue Paul Bousquet", "codePostal" => "18273", "ville" => "Paris", "restaurant" => "OUI"]);
$a2 = new Agence(["nomAgence" => "Codenid", "adress" => "603, chemin de Louis", "codePostal" => "88839", "ville" => "Marseille", "restaurant" => "OUI"]);
$a3 = new Agence(["nomAgence" => "Smashcode", "adress" => "8, avenue Muller", "codePostal" => "33406", "ville" => "Lyon", "restaurant" => "NON"]);
$a4 = new Agence(["nomAgence" => "Codefeu", "adress" => "3, rue Potier", "codePostal" => "67238", "ville" => "Nice", "restaurant" => "OUI"]);
$a5 = new Agence(["nomAgence" => "codevoie", "adress" => "2, boulevard Ramos", "codePostal" => "85835", "ville" => "Lille", "restaurant" => "NON"]);

$enf1 = new Enfants(["Nom" => "Rjeb", "Prenom" => "Alex", "Age" => "7"]);
$enf2 = new Enfants(["Nom" => "Rjeb", "Prenom" => "Layana", "Age" => "12"]);
$enf3 = new Enfants(["Nom" => "Balair", "Prenom" => "Alex", "Age" => "10"]);
$enf4 = new Enfants(["Nom" => "Cugny", "Prenom" => "Antoine", "Age" => "18"]);
$enf5 = new Enfants(["Nom" => "Aarous", "Prenom" => "Ines", "Age" => "20"]);
$enf6 = new Enfants(["Nom" => "Courquin", "Prenom" => "Patrick", "Age" => "24"]);
$enf7 = new Enfants(["Nom" => "Courquin", "Prenom" => "Patricia", "Age" => "14"]);
$liEnfants = [$enf1, $enf2, $enf3, $enf4, $enf5, $enf6, $enf7];


$date1 = new DateTime("30-12-2020");
$date3 = new DateTime("30-10-2002");
$date4 = new DateTime("10-05-1999");
$date5 = new DateTime("15-12-2015");
$e1 = new Employe(["nom" => "Rjeb", "prenom" => "Zied", "dateEmbauche" => $date1, "fonction" => "dev", "SalaireAnnuel" => 50, "service" => "informatique", "agence" => $a1, "Enfants" => [$enf1, $enf2]]);
$e2 = new Employe(["nom" => "Aarous", "prenom" => "Sofiane", "dateEmbauche" => new DateTime("30-11-2010"), "fonction" => "GENDARME", "SalaireAnnuel" => 10, "service" => "Défense", "agence" => $a2, "Enfants" => [$enf5]]);
$e3 = new Employe(["nom" => "Balair", "prenom" => "Quentin", "dateEmbauche" => $date3, "fonction" => "animateur", "SalaireAnnuel" => 20, "service" => "loisir", "agence" => $a3, "Enfants" => [$enf3]]);
$e4 = new Employe(["nom" => "Cugny", "prenom" => "Maxime", "dateEmbauche" => $date4, "fonction" => "ecrivain", "SalaireAnnuel" => 25, "service" => "litterature", "agence" => $a4, "Enfants" => [$enf4]]);
$e5 = new Employe(["nom" => "Courquin", "prenom" => "Pierre", "dateEmbauche" => $date5, "fonction" => "Psychologue", "SalaireAnnuel" => 15, "service" => "Médico-social", "agence" => $a5, "Enfants" => [$enf6, $enf7]]);
$liste = [$e1, $e2, $e3, $e4, $e5];


echo "Le nombre d’employés de l’entreprise est : ", Employe::getCompteur();
asort($liste);

foreach ($liste as $key) {
    echo $key->toString();
}
echo "\n";


//Masse Salariale
$masseSalarialeTotale = 0;
foreach ($liste as $elt) {
    $masseSalarialeTotale += $elt->masseSalariale();
}
echo "La masse salariale totale est de " . $masseSalarialeTotale . " K\n";



//Ordre de transfert
$dateAujourdhui = new DateTime('now');
// $annee = $dateAujourdhui->format('Y');
// $jourDePrime = new DateTime('30-11-' . $annee);
$jourDePrime = (new DateTime())->setDate($dateAujourdhui->format('Y'), 9, 30);
// echo "Jour de prime :\n";
// var_dump($jourDePrime);
// echo "Jour aujourd'hui :\n";
// var_dump($dateAujourdhui);

if ($jourDePrime < $dateAujourdhui) { //on compare les dates
    foreach ($liste as $elt) {
        echo "L'ordre de transfert a été envoyé à la banque pour " . $elt->getNom() . " " . $elt->getPrenom() . " d'un montant de " . $elt->prime() . "K\n";
    }
} else {
    echo "L'ordre de transfert n'a pas été envoyé à la banque\n";
}
