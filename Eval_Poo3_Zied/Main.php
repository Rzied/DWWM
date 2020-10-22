<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$c1 = new Compte(["Numero" => "50236R", "Montant" => 120]);
// echo $c1->toString();
$li = new Livret(["Numero" => "45789L", "Montant" => 1200]);

$cl1 = new Client(["Nom" => "Dupont", "Prenom" => "Paul", "Compte" => $c1,"Livret"=>$li]);

echo $cl1->toString();
echo $li->toString();
echo "\nLE client recoit 50€";
// $cl1->Recevoir(50);
// $c1 = new Compte(["Numero" => "50236R", "Montant" => 120,"Debiter"=>50]);
// var_dump($c1);

echo "\nOn applique les interets au livret"  . $cl1->toString() . $li->appliqueInteret();
