<?php
do {
    $C1=readline ("Entrez le score de candidat 1 : ");
} while (($C1 > 100)or($C1<0));
do {
    $C2=readline ("Entrez le score de candidat 2 : ");
} while (($C2 > 100)or($C2<0));
do {
    $C3=readline ("Entrez le score de candidat 3 : ");
} while (($C3 > 100)or($C3<0));
do {
    $C4=readline ("Entrez le score de candidat 4 : ");
} while (($C4 > 100)or($C4<0));

        if ($C1>50) {
            echo "Elu au premier tour";
        }

        elseif (($C2>50 or $C3 > 50 or $C4 > 50) or Not($C1 >= 12.5)) {
             echo "Battu, éliminé, sorti !!!";   
        }
        elseif ($C1<50 & $C1 >= $C2 & $C1 >= $C3 & $C1 >= $C4) {
            echo "Ballotage favorable";
        }
        else {
            echo "Ballotage défavorable";
        }