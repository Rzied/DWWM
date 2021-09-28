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

$n = saisi();
$tableau = remplir($n);
// s contient la somme des notes
// m contient la moyenne
$s = 0;
for ($i = 0; $i < $n; $i++) {
    $s += $tableau[$i];
    $m = $s / $n;
}
// verification de nombre de note plus grand que la moyenne
$nb = 0;
for ($i = 0; $i < $n; $i++) {
    if ($tableau[$i] > $m) {
        $nb++;
    }
}
echo "Le nombre de note supérieure à la moyenne est : ", $nb;
