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
if ($m==1 or $m==3 or $m==5 or $m==7 or $m==8 or $m==10 or $m==12 ) {
    
}
