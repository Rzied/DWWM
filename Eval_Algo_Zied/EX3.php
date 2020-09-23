<?php

function demandeEntier($invite) // Demande un entier à l'utilisateur
{
    do {
        $nombre = readline($invite);
    } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    return $nombre; //renvoi le nombre saisi
}
// msg de titre
echo "Racine de l'equation du 2nd degré \n";
echo "\t\tY=aX² + bX +c\t\t\n";

// boucle pour refaire le traitement 
do {
    // demander les variable
    $a = demandeEntier("Quelle est la valeur de a :");
    $b = demandeEntier("Quelle est la valeur de b :");      
    $c = demandeEntier("Quelle est la valeur de c :");

    $delta = ($b * $b) - 4 * $a * $c;           //la formule 

    switch ($delta) {                                   //le traitement des conditions 
        case $delta < 0:
            echo "l'equation ne possede pas de racine réelle \n";
            echo "d=", $delta, "\n";
            break;
        case $delta == 0:
            echo "l'equation possede une racine double \n";
            echo "d=0\n";
            echo "x1=x2= ", ($b / (2 * $a)), "\n";
            break;
        case $delta > 0:
            echo "l'equation possede deux racines distinctes \n";
            echo "d= ", $delta, "\n";
            echo "l'equation s'annule pour :\n";
            echo "x1=", (-$b + sqrt($delta)) / 2 * $a, "\n";
            echo "x2=", (-$b - sqrt($delta)) / 2 * $a, "\n";
            break;
        case $a == 0:
            echo "l'equation est du 1er degré !\n";
            echo "l'equation s'annule pour x=-(c/b) : -0.25\n";
            break;
        case ($a == 0 && $b == 0):
            echo "l'equation n'en est plus une !!!";
            break;

    }
    $verif = readline("Voulez-vous continuer? "); //verification pour continuer ou pas
    $verif = strtoupper($verif);
} while ($verif == "O");                //condition d'arret
echo "\n\nAu revoir et à bientôt! "; //message
