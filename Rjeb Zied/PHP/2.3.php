<?php

    $HT=readline ("entrer le prix HT :");
    $NB=readline ("entrer le nembre d'article :");
    $TAUX=readline ("entrer le taux de TVA :");
    $cons=$ht/100

    $T=($cons*$TAUX);
    $TTC=($T+$TTC)*$NB;

    echo $TTC;