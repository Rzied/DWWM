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
// chercher la plus grande valeur du tab
// on peut utiliser la fonction max 
// $pg=$tab[1];
// for ($i=2; $i <=$n ; $i++) { 
//     if ($tab[$i]>$pg) {
//         $pg=$tab[$i];
//         $p=$i;
//     }
// }
// echo "la plus grande valeur est : ",$pg,"\n";
// echo "la position qu'elle occupe est : ",$p;


echo "la valeur la plus haute est :".max($tab).", elle se trouve à la position : ".array_search(max($tab),$tab);