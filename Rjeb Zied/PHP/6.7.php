<?php

for ($i = 1; $i < 10; $i++) {
    do {
        $tab[$i] = readline("Entrer la note " . $i . " :(ça dois etre un nombre!)\t");
    } while (!is_numeric($tab[$i]));
}
// var_dump($tab);
echo "Je laisse l'affichage de Tableau pour le plaisir :)\n";
$s = 0;
for ($i = 1; $i < 10; $i++) {

    echo "\t ", $tab[$i];
    $s = $s + $tab[$i];
}
$m = $s / 9;
echo "\n La moyenne est :", $m;
