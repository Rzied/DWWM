<?php

do {
    do {
        $x = readline("Entrer un nombre de départ : ");
    } while (!is_numeric($x));
    //  var_dump( $x);
    //  var_dump( $x*1);
} while (!is_int($x * 1));
$x0 = $x;
for ($i = 1; $i < $x0; $i++) {
    $x = $x * $i;
}
echo "La factorielle de ", $x0, "! est :", $x, "\n";
