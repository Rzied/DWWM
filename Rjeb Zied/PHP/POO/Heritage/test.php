<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//CREATION DU RECTANGLE
$r = new Rectangle(["Largeur" => 10, "Longueur" => 5]);
echo "\nLe RECTANGLE\n".$r->AfficherRectangle(); // AFFICHAGE DE RECTANGLE

//CREATION DU TRIANGLE
$t1 = new TriangleRectangle(["Base" => 10, "Hauteur" => 5]);
echo "\nLe TRIANGLE".$t1->toString(); //AFFICHAGE DU TRIANGLE


//CREATION De CERCLE
$c1 = new Cercle(["Diametre" => 10]);
echo "\n\nLe CERCLE".$c1->toString()."\n"; //AFFICHAGE De CERCLE

//CREATION De PAVE
$p1 = new Pave(["Largeur" => 10,"Longueur"=>5,"Hauteur"=>7]);
echo $p1->toString();

//CREATION De SPHERE
$s1 = new Sphere(["Diametre" => 6]);
echo "\n".$s1->toString();