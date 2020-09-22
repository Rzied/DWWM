<?php

// Fonction de saisi de la taille de tableau
function saisi()
{
    do {
        do {
            $n = readline("Entrer la taille du tableau :");
        } while (!is_numeric($n));
    } while (!is_int($n * 1));
    return $n;
}

// remplire le tableau
function remplir($n)
{

    for ($i = 0; $i < $n; $i++) {
        do {
            $tab[$i] = readline("Entrer la valeur N° " . ($i + 1) . " :");
        } while (!is_numeric($tab[$i]));
    }
    return $tab;
}
// Fonction d'affichage
function affichage($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        echo $tab[$i] . "\t";
    }
}
// Programme Principale


$n=saisi();
$tab=remplir($n);

// tester et faire le tri decroissant du tableau

do {
    $yapermut = false;

    for ($i = 0; $i < count($tab) - 1; $i++) {
        if ($tab[$i] > $tab[$i + 1]) {
            $temps = $tab[$i];
            $tab[$i] = $tab[$i + 1];
            $tab[$i + 1] = $temps;
            $yapermut = true;
        }

    }

} while ($yapermut);

// affichage
echo "\n Le tableau trié dans l’ordre croissant : \n";
affichage($tab);
