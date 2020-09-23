<?php
/* Saisie par l'utilisateur dun nombre*/
function demandeEntier($msg)
{
    do {
        do {
            $nbr = readline($msg);
        } while (!is_numeric($nbr)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nbr * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nbr; //renvoi le nombre saisi
}
echo "\t****\tTable de multiplication\t****\n\n";                           //message
do {

/* Afficher la table de multiplication */
    
    $nbr = demandeEntier("Entrer le nombre pour lequel vous voulez la table de multiplication : ");   //appel de la fonction demandeEntier dans $nbr
    for ($i = 1; $i <= 10; $i++) {                                     //faire la multiplication
        echo $nbr . "\t x " . $i . "\t = " . ($nbr * $i) . "\n";
    }

    $verif = readline("Voulez-vous continuer? ");       //verification pour continuer ou pas 
    $verif = strtoupper($verif);
} while ($verif == "O");
// message pour dire au revoir
echo "\n\nAu revoir et à bientôt! ";                //message 
