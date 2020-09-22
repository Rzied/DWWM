<?php

function saisi()
{
    do {
        do {
            $n = readline("Entrer la taille du tableau :");
        } while (!is_numeric($n));
    } while (!is_int($n * 1));
    return $n;
}
function remplirMots($n)
{

    for ($i = 0; $i < $n; $i++) {

        $tab[$i] = readline("Entrer le mot N° " . ($i + 1) . " :");
    }
    return $tab;
}
function affichage($tab, $n)
{
    for ($i = 0; $i < $n; $i++) {
        echo $tab[$i] . "\t";
    }
}


$n = saisi();
$tab=remplirMots($n);
affichage($tab,$n);