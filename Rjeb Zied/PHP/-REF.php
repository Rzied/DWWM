<?php
// *****************************************
//                  ZIED
// *****************************************

function saisi(){
    do {
        do {
            $n=readline("Entrer la taille du tableau :");
        } while (!is_numeric($n));
    } while (!is_int($n*1));
    return $n;
    }
   // ***************************************** 
    
    function remplir($n){
    
        for ($i = 0; $i < $n; $i++) {
            do {
                $tab[$i] = readline("Entrer la valeur N° " . ($i+1) . " :");
            } while (!is_numeric($tab[$i]));
        }
        return $tab;
    }
  // *****************************************  
    
    function affichage($tab,$n) {
        for ($i = 0;$i<count($tab);$i++) {
            echo $tab[$i]."\t";
        } 
    }
    $n=saisi();
    $tableau=remplir($n);
    affichage($tableau,$n);




// *****************************************
    //              MARTINE
// *****************************************

  
{
    do
    {
        do
        {
            $nombre = readline("Entrer un entier : ");
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}
// *****************************************

function factorielle($nombre) //calcule la factorielle d'un nombre
{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 2; $i <= $nombre; $i++)
    {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}

// *****************************************

function addition ($n1,$n2)
{
    return $n1+$n2;
}
// *****************************************
function demandeEntierPhrase($phrase) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($phrase);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}