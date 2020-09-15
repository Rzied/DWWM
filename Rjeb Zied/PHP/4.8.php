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
if (($M==4 or $M==6 or $M==9 or $M==11 )&& ($J>30) or ($M==2 && $J>29)) {
    echo "La date est invalide";
}
elseif ($M==2 && $J==29) {

if ($A%4) {
    if ($A%400) {
        echo "L'année est Bissextile";
    }
    elseif ($A%100) {
        echo "L'année est non Bissextile";
    }
    else {
        echo "L'année est Bissextile";
    }
}
}
else {
    echo "L'année est non Bissextile";
}
