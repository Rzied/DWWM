<?php
do {
    do {
        $nombre = readline("Combien de valeurs allez-vous saisir?");
    } while (!is_numeric($nombre));
} while (!is_int($nombre * 1));
for ($i = 0; $i < $nombre; $i++) {
    do {
        do {
            $valeur = readline("Entrez la valeur: N° " . ($i + 1) . " : ");
        } while (!is_numeric($valeur));
    } while (!is_int($valeur * 1));
    $array[] = $valeur;
}
$negatifs = 0;
$positifs = 0;
foreach ($array as $elt) {
    if ($elt < 0) {
        $negatifs++;
    } else {
        $positifs++;
    }
}
echo "Le nombre de valeurs négatives: " . $negatifs . ".\n Le nombre de valeurs positives: " . $positifs . ".";
