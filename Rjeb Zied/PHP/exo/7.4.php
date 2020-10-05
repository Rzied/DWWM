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

function demandeEntierPhrase($phrase) // Demande un entier à l'utilisateur

{
    do {
        do {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
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

// tester et faire le tri decroissant du tableau

$n = saisi();
$tab = remplir($n);
affichage($tab);
$nb = demandeEntierPhrase("\nEntrer le numero de la case que vous vouler supprimer :");
array_splice($tab, ($nb - 1), 1);

affichage($tab);
