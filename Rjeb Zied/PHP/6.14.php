<?php
function saisi(){
do {
    do {
        $n=readline("Entrer la taille du tableau :");
    } while (!is_numeric($n));
} while (!is_int($n*1));
return $n;
}


function remplir($n){

    for ($i = 0; $i < $n; $i++) {
        do {
            $tab[$i] = readline("Entrer la valeur N° " . ($i+1) . " :");
        } while (!is_numeric($tab[$i]));
    }
    return $tab;
}


function affichage($tab,$n) {
    for ($i = 0;$i<count($tab);$i++) {
        echo $tab[$i]."\t";
    } 
}
$n=saisi();
$tableau=remplir($n);
affichage($tableau,$n);