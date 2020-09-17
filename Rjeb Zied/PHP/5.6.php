<?php

do {
    do {
        $x = readline("Entrer un nombre de départ : ");
    } while (!is_numeric($x));
    //  var_dump( $x);
    //  var_dump( $x*1);
} while (!is_int($x * 1));
$x0 = 1;
echo "La factorielle de ", $x, " est :\n";
for ($i = 1; $i <= $x; $i++) {
    $x0 = $x0 * $i;
    if ($i < $x) {
        echo $i, " x ";
    } else {
        echo $i, " = ";
    }
}
echo $x0;
