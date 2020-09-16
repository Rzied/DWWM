<?php

do {
    do {
        $n = readline("Entrer le nombre de chevaux partants : ");
    } while (!is_numeric($n));
    //  var_dump( $n);
    //  var_dump( $n*1);
} while (!is_int($n * 1));
do {
    do {
        $p = readline("le nombre de chevaux joués: ");
    } while (!is_numeric($p));
    //  var_dump( $p);
    //  var_dump( $p*1);
} while (!is_int($p * 1));

$factN = $n;
for ($i = 1; $i < $n; $i++) {
    $factN = $factN * $i;
}

$factP = $p;
for ($i = 1; $i < $p; $i++) {
    $factP = $factP * $i;
}

$factNp = ($n - $p);
for ($i = 1; $i < ($n - $p); $i++) {
    $factNp = $factNp * $i;

}

$x = $factN / $factNp;
$y = $factN / ($factP * $factNp);

echo "Dans l’ordre : une chance sur ", $x, " de gagner\n";
echo "Dans le désordre : une chance sur ", $y, " de gagner\n";
