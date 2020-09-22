<?php
require "-REF.php";

// Demande de taille du tableau et le remplire
$n = demandeEntierPhrase("Entrer la taille du tableau :");
$tab = creerTableauAvecTaille($n);

// vérification de tableau
$test = true;
for ($i = 1; $i < $n; $i++) {
    if (($tab[$i] != ($tab[$i - 1] + 1)or($tab[$i] != ($tab[$i - 2] + 1) )) && ($tab[$i] != ($tab[$i - 1] - 1))or($tab[$i] != ($tab[$i - 2] - 1) )) {
        $test = false;
    }
}

if ($test == true) {
    echo "les éléments du tableau sont tous consécutifs";
} else {
    echo "les éléments du tableau ne sont pas tous consécutifs";
}
