<?php

    $HT=readline ("entrer le prix HT :");
    $NB=readline ("entrer le nembre d'article :");
    $TAUX=readline ("entrer le taux de TVA :");
    $TTC=0;

    $T=($HT/100)*$TAUX;
    $TTC=($T+$TTC)*$NB;

    echo $TTC;