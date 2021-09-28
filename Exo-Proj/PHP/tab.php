<?php

// for ($i=0; $i <3 ; $i++) { 
//     for ($j=0; $j <3 ; $j++) { 
//          $t[$i][$j]=readline("Entrer l'element ".$i.",".$j." : ");
//     }
// }
$t[0] = [0, 3, 6];
$t[1] = [1, 4, 7];
$t[2] = [2, 5, 8];
$tiret="____";
// echo "\n _______________  ______________  ______________\n";
// for ($i=0; $i <3 ; $i++) { 

//     for ($j=0; $j <3 ; $j++) { 
//         echo "|\t" .$t[$i][$j] ."\t|";
//     }
//     echo "\n|_______________||______________||______________|\n";
// }
echo "\n ";
for ($i=0;$i<3;$i++)
{
echo $tiret;
}
echo "\n";
for ($i = 0; $i < 3; $i++) {
    echo " | ";
    for ($j = 0; $j < 3; $j++) {
        
            echo $t[$i][$j] . " | ";
        
        
    }
    echo "\n ";
    if ($i < count($t) - 1) {
        
        for ($k = 0; $k < count($t[0]); $k++) {
            echo $tiret;
        }
        echo "_\n";
}
}
