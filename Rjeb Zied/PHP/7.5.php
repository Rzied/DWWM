<?php
require "-REF.php";

function remplir($n)
{

    for ($i = 0; $i < $n; $i++) {
        do {

            $tab[$i] = readline("Entrer la valeur N° " . ($i + 1) . " :");
        } while (!is_numeric($tab[$i]));
    }
    return $tab;
}






$n=saisi();
