<?php
do {
    do {
        $x = readline("Entrer un nombre : ");
    } while (!is_numeric($x));
    //  var_dump( $x);
    //  var_dump( $x*1);
} while (!is_int($x * 1));

for ($i = 1; $i < 11; $i++) {
    $m = $x * $i;
    echo $x, " x ", $i, " = ", $m, "\n";
}
