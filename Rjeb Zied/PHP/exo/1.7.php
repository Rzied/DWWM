<?php

$A = readline("entrer une valeur A ");
$B = readline("entrer une valeur B ");
$C = readline("entrer une valeur C ");

$X = $B;
$B = $A;
$A = $C;
$C = $X;

echo "A: ", $A, "\n";
echo "B: ", $B, "\n";
echo "C: ", $C;
