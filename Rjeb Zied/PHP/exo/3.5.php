<?php

$a = readline("Entrer le nombre A : ");
$b = readline("Entrer le nombre B : ");

if ($a == 0 || $b == 0) {
    echo "Null";
} elseif  ($a < 0 xor $b < 0) 
{
    echo "Négatif";
}
else {
    echo "Positif";
}