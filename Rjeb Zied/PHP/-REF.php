<?php
// *****************************************
//                  ZIED
// *****************************************

function saisi()
{
    do {
        do {
            $n = readline("Entrer la taille du tableau :");
        } while (!is_numeric($n));
    } while (!is_int($n * 1));
    return $n;
}
// *****************************************

function remplir($n)
{

    for ($i = 0; $i < $n; $i++) {
        do {
            $tab[$i] = readline("Entrer la valeur N° " . ($i + 1) . " :");
        } while (!is_numeric($tab[$i]));
    }
    return $tab;
}
// *****************************************

function affichage($tab, $n)
{
    for ($i = 0; $i < count($tab); $i++) {
        echo $tab[$i] . "\t";
    }
}

// *****************************************
//              MARTINE
// *****************************************

// {
//     do
//     {
//         do
//         {
//             $nombre = readline("Entrer un entier : ");
//         } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
//     } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
//     return $nombre; //renvoi le nombre saisi
// }
// *****************************************

function factorielle($nombre) //calcule la factorielle d'un nombre

{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 2; $i <= $nombre; $i++) {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}

// *****************************************

function addition($n1, $n2)
{
    return $n1 + $n2;
}
// *****************************************
function demandeEntierPhrase($phrase) // Demande un entier à l'utilisateur

{
    do {
        do {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

/* FONCTIONS TABLEAUX */

function demandeEntier($invite) // Demande un entier à l'utilisateur

{
    do {
        do {
            $nombre = readline($invite);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

/*
Description : Affiche les éléments du tableau séparés par une tabulation // Utilisation du foreach
$tab : tableau à afficher
 */
function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt . "\t";
    }
    echo "\n";
}

/*
Description : cette fonction permet de créer un tableau de taille passée en parametre avec les éléments saisis par l'utilisateur
$tailleTableau : taille du tableau
return  : renvoi le tableau rempli
 */
function creerTableauAvecTaille($tailleTableau)
{
    for ($i = 0; $i < $tailleTableau; $i++) {
        $tab[] = demandeEntier("Entrer la valeur N° ".($i+1)." : ");
    }
    return $tab;
}

/*
Description : cette fonction permet de créer un tableau avec les éléments saisis par l'utilisateur, fin de saisi avec la saisie de 0
return  : renvoi le tableau rempli
 */
function creerTableauTermineParZero()
{
    do {
        $nb = demandeEntier("Entrer une valeur");
        if ($nb != 0) //evite que le dernier 0 entre dans le tableau
        {
            $tab[] = $nb;
        }
    } while ($nb != 0);
    return $tab;
}
