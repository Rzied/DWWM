<?php
require "-REF.php";
// Demande de taille du tab 1 et le remplire
$n1 = demandeEntierPhrase("Entrer la taille du tableau 1 :");
$tab1 = creerTableauAvecTaille($n1);

// Demande de taille du tab 2 et le remplire
$n2 = demandeEntierPhrase("Entrer la taille du tableau 2 :");
$tab2 = creerTableauAvecTaille($n2);

// le calcul de Schtroumpf
$s = 0;
for ($i = 0; $i < $n1; $i++) {
    for ($j = 0; $j < $n2; $j++) {
        $s = $s + ($tab1[$i] * $tab2[$j]);
    }
}

// l'affichage de Schtroumpf
echo "Le Schtroumpf sera : ", $s;
