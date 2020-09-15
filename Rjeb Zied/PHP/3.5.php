<?php

$a = readline("Entrer le nombre A : ");
$b = readline("Entrer le nombre B : ");

if (($a > 0 and $b > 0) xor ($a < 0 xor $b < 0) xor ($a = 0 xor $b = 0)) {
    echo "Positif";
} else {
    echo "Négatif";
}
