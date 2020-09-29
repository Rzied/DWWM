<?php

for ($i=0; $i <3 ; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
         $t[$i][$j]=readline("Entrer l'element ".$i.",".$j." : ");
    }
}

for ($i=0; $i <3 ; $i++) { 
    for ($j=0; $j <3 ; $j++) { 
        echo $t[$i][$j]."\t";
    }
    echo "\n";
}