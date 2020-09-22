<?php
function genererChaineAleatoire($longueur = 3)
{
 $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $longueurMax = strlen($caracteres);
 $chaineAleatoire = '';
 for ($i = 0; $i < $longueur; $i++)
 {
 $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
 }
 return $chaineAleatoire;
}
//Utilisation de la fonction
$n=5;
for ($i=0; $i <$n ; $i++) { 
        $tab[$i]= genererChaineAleatoire(5);
        echo "\t",$tab[$i];
}
$mot=readline("\nentrer le mot à rechercher : \n");
var_dump($tab);
echo $mot;
$test=false;
for ($i=0; $i <$n ; $i++) { 
    if ($tab[$i]==$mot) {
       $test=true;
    }
    }
if ($test) {
    echo "Le mot que vous cherchez existe dans le tableau. ";
}

else {
    echo "Le mot que vous cherchez n'existe pas !!";
}