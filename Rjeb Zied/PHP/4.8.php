<?php
echo "Entrer la date : JJ-MM-AAAA Exemple:29-05-1991\n";
do {
    $J = readline("Entrer le jour\n");
} while (($J < 1) or ($J > 31));
do {
    $M = readline("Entrer le mois\n");
} while (($M < 1) or ($M > 12));
do {
    $A = readline("Entrer l'année\n");
} while ($A < 1);
$test = true;

if (($M == 4 or $M == 6 or $M == 9 or $M == 11) && ($J > 30) or ($M == 2 && $J > 29)) {

    $test = false;
}
if ($M == 2 && $J == 29) {

    if ($A % 4) {
        if ($A % 400) {
            $test = false;
        } elseif ($A % 100) {
            $test = true;
        } else {
            $test = true;
        }
    }

}

if ($test) {
    echo "l'année est valide ";
} else {
    echo "l'année n'est pas valide ";
}
