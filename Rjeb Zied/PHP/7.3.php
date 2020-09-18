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

function affichage($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        echo $tab[$i] . "\t";
    }
}

// tester et faire le tri decroissant du tableau

$n = saisi();
$tab = remplir($n);

$inverse = array_reverse($tab);
affichage($inverse);
