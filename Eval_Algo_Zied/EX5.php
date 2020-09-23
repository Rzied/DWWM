<?php
$voy = array('a', 'e', 'i', 'o', 'u', 'y');

$ch=readline("Taper une chaine de caracteres : (inferieure à 255, terminée par un point) :");

echo "nombre de cracteres :",strlen($ch),"\n";  // Affiche nombre caracteres
$tot=0;
foreach($voy as $voyelle){
    $tot += substr_count(strtolower($ch), $voyelle);
   }
   echo $tot." nombre de voyelles\n";  // Affiche : 6 voyelles
   echo "le nombre de chiffres : ",count($ch),"\n";