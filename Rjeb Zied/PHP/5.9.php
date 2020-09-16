<?php

$s = 0;
do {
    $x = readline("Entrer les sommes de vos achats une par une : NB: Taper 0 pour finir\n");
    $s = $s + $x;
} while ($x != 0);
echo "Vous devez payer :", $s, " euros\n";
do {
    $v = readline("Vous allez verser combien? ");
} while (!($v >= $s));
$r = $v - $s;
$b10 = 0;
while ($r >= 10) {
    $b10 = $b10 + 1;
    $r = $r - 10;
}
if ($r > 5) {
    $b5 = 1;
    $r = $r - 5;
} else {
    $b5 = 0;
}
echo "Monnaie à rendre :\n";
echo $b10, " Billet de 10 E.\n";
echo $b5, "  Billet de  5 E.\n";
echo $r, "   Pièces de  1 E.\n";
