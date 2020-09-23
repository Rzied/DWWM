<?php

function saisi()            // fonction pour demander le rayon 
{
    do {
        $rayon = readline("Quel est le rayon du cercle : ");
    } while (!is_numeric($rayon));
    return $rayon;
}

function circonference($rayon)          // fonction pour calculer la circonference 
{
    $cir = 2 * pi() * $rayon;
    return $cir;
}

function surface($rayon)            // fonction pour calculer la surface 
{
    $sur = pi() * ($rayon * $rayon);
    return $sur;
}

/* Programme Principale
appel des fonctions et faire la 
verification pour refaire le calcul ou pas
*/

do {
    $rayon = saisi();                                                       
    echo "Sa circonférence est de \t :", circonference($rayon);
    echo "\nSa surface est de       \t :", surface($rayon);

    $verif = readline("\nVoulez-vous faire un autre calcul (O/N) : ");
    $verif = strtoupper($verif);
} while ($verif == "O");
// message pour dire au revoir 
echo "\n\nAu revoir et à bientôt! ";
