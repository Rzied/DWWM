<?php
function recherche()
{
    $code=readline("Entrez le code de l'avion :");
    $code=strtoupper($code);
    for ($i=0; $i <count($tab2) ; $i++) { 
        if ($tab2[$i] == $code) {
            echo "Avion : ",$tab1[$i]," Vitesse : ",$tab3[$i]," Rayon d'action : ",$tab4[$i],"\n\n";
        }
    }
}

$tab1=['BOING747','AIRBUSA380','LEARJET45','DC10','CONCORDE','ANTONOV32'];
$tab2=['B0','AB','LJ','DC','CO','AN'];
$tab3=[800,950,700,900,1400,560];
$tab4=[10000,12000,4500,8000,16000,2500];


$s=0;
    for ($i=0; $i < count($tab4) ; $i++) { 
      $s+=$tab4[$i]; 
    }
    $moy=$s/count($tab4);
//     echo $s,"\n";
// echo $moy,"\n";
echo "\t****\tSTATISTIQUES AVIONS\t****\n\n";
$code=readline("Entrez le code de l'avion :");
$code=strtoupper($code);
switch ($code) {
    case 'B0':
        echo "Avion : ",$tab1[1]," Vitesse : ",$tab3[1]," Rayon d'action : ",$tab4[1],"\n\n";
        

        $verif = readline("\nVoulez-vous éditer les statistiques (O/N) : ");
        $verif = strtoupper($verif);
            if ($verif=="O") {
                do {
                    echo "L'avion qui vole le plus vite est le CONCORDE à 1400 km/h \n";
                    echo "La moyenne des rayons d'action est de : ",$moy,"\n";
                    
                    $verif = readline("\nVoulez-vous faire une autre recherche (O/N) : ");
                    $verif = strtoupper($verif);
                } while ($verif == "O");
            }
// do {
  
//         $verif = readline("\nVoulez-vous éditer les statistiques (O/N) : ");
//             $verif = strtoupper($verif);
//            while ($verif == "O") {
//                echo "L'avion qui vole le plus vite est le CONCORDE à 1400 km/h \n";
//                echo "La moyenne des rayons d'action est de : ",$moy,"\n";
//                $verif="N";
//            } 
//            $verif="N";
//         } while ($verif == "O");
        
            
        
        // message pour dire au revoir 
        echo "\n\nAu revoir et à bientôt! ";
        



        break;
    
    default:
        echo "Cet avion n'existe pas";
        break;
}




