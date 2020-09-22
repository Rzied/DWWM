<?php
require "-REF.php";

// Demande de taille du tableau et le remplire
$n = demandeEntierPhrase("Entrer la taille du tableau :");
$tab = creerTableauAvecTaille($n);

// vérification de tableau
$test = true;
$sens = "";
$i=1;
if ($tab[0] > $tab[1]) {
    $sens = "c";}
while ($i < $n ) {

    if ($sens == "c") {
        if ($tab[$i] != $tab[$i - 1] - 1) {
            $test = false;
        }

    } else {
        if ($tab[$i] != $tab[$i - 1] + 1) {
            $test = false;
        }
    }
    $i++;
}

if ($test == true) {
    echo "les éléments du tableau sont tous consécutifs";
} else {
    echo "les éléments du tableau ne sont pas tous consécutifs";
}
