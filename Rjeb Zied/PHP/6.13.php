<?php

do {
    do {
        $n = readline("Entrez la taille du tableau :");
    } while (!is_numeric($n));
} while (!is_int($n * 1));

for ($i = 1; $i <= $n; $i++) {
    do {
        $tab[$i] = readline("Entrer la valeur N° " . $i . " :");
    } while (!is_numeric($tab[$i]));
}
$pg=$tab[1];
for ($i=2; $i <=$n ; $i++) { 
    if ($tab[$i]>$pg) {
        $pg=$tab[$i];
        $p=$i;
    }
}
echo "la plus grande valeur est : ",$pg,"\n";
echo "la position qu'elle occupe est : ",$p;