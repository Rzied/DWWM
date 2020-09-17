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
// fonction d'affichage
function affichage($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        echo $tab[$i] . "\t";
    }
}

$n = saisi();
$tab = remplir($n);

// tester et faire le tri decroissant du tableau
for ($i = 0; $i < $n - 2; $i++) {
    $p = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($tab[$j] > $tab[$p]) {
            $p = $j;
        }
    }
    $temp = $tab[$p];
    $tab[$p] = $tab[$i];
    $tab[$i] = $temp;

}

echo "\n Le tableau trié dans l’ordre décroissant : \n";
affichage($tab);
