<?php

    $a=readline ("Entrer votre age : ");
    
    
     do {  
     $s=readline ("Entrer Votre sex : (h ou f) \t");
     }
     while (($s!="h")and($s!="f"))  ;

        if (($a>20) and ($s=="h")) {
            echo "Vous devez payer l'impot";
        }
        elseif (($a>=18) && $a<=35 && $s=="f") {
            echo "Vous devez payer l'impot";
        }
        else {
            echo "Vous ne devez pas payer l'impot";
        }