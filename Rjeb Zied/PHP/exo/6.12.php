<?php

do {
    do {
        $n = readline("Entrer  le nombre de valeur que vous comptez saisir :");
    } while (!is_numeric($n));
} while (!is_int($n * 1));

for ($i = 1; $i <= $n; $i++) {
    do {
        $tab[$i] = readline("Entrer la note " . $i . " :(ça dois etre un nombre!)\t");
    } while (!is_numeric($tab[$i]));
}
for ($i = 1; $i <= $n; $i++) {
    $tab[$i] = ($tab[$i] + 1);
    echo "\t", ($tab[$i]);
}
