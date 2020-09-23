<?php
function recherche()
{
    $code=readline("Entrez le code de l'avion :");
    $code=strtoupper($code);
  for ($i=0; $i <6; $i++) { 
      
        if ($tab2[$i] == $code) {
            echo "Avion : ",$tab1[$i]," Vitesse : ",$tab3[$i]," Rayon d'action : ",$tab4[$i],"\n\n";
        }
    }}


$tab1=['BOING747','AIRBUSA380','LEARJET45','DC10','CONCORDE','ANTONOV32'];
// $tab2=["B0",'AB','LJ','DC','CO','AN'];
$tab3=[800,950,700,900,1400,560];
$tab4=[10000,12000,4500,8000,16000,2500];
$tab2=array();
$tab2[1]="B0";
$tab2[2]="AB";
$tab2[3]="LJ";
$tab2[4]="DC";
$tab2[5]="CO";
$tab2[6]="AN";





$r=recherche();