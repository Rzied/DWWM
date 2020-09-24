<?php

function afficherTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt . " ";
    }
    echo "\n";
}

function coderMot($mot)
{
    for ($i = 0; $i < strlen($mot); $i++) {
        $tab[] = "_";
    }
    return $tab;
}

function testerLettre($lettre, $tab, $depart)
{
    // $j = 0;
    // for ($i = $depart; $i < count($tab); $i++) {
    //     if ($tab[$i] == $lettre) {
    //         $pos[$j] = $i;
    //         $j++;
    //     }
    // }
    // return $pos;

    $tabRec = array_slice($tab, $depart);
    $res = (array_search($lettre, $tabRec));
    if ($res === false) {
        return [];
    } else {

        $reponse[] = $res + $depart;
        return $positions = array_merge($reponse, testerLettre($lettre, $tab, $res + $depart + 1));

    }
}

function ajouterUneLettre($lettre, $tab, $position)
{
    for ($i = $position; $i < ($position + 1); $i++) {
        $tab[$i] = $lettre;
    }
    return $tab;
}

function ajouterLesLettres($lettre, $tab, $listePosition)
{
    foreach ($listePosition as $pos) {
        $tab = ajouterUneLettre($lettre, $tab, $pos);
    }
    return $tab;

}

function afficherMauvaisesLettres($listeLettres)
{
    for ($i = 0; $i < count($liste); $i++) {
        foreach ($liste as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
        {
            echo $elt . "\t";
        }
        echo "\n";
    }
}

// $t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
// Echo "Cette méthode doit donner B O N J O U R et ca donne : \n" ,afficherTableau($t);

// $test = "bonjour";
// echo "Cette méthode doit donner        et ca donne : \n" ;
// afficherTableau(coderMot($test));

// Echo "Cette méthode doit donner \n 1 \n 4 et ca donne \n" ;
// $t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
// $positions = testerLettre('O', $t,0);
// foreach ($positions as $pos)
// {
//     echo("position : ".$pos."\n");
// }
// echo "Cette méthode doit donner B O N K O U R et ca donne";
// $t = array('B', 'O', 'N', 'J', 'O', 'U', 'R');
// afficherTableau(ajouterUneLettre('K', $t, 3));

// $motATrouver = "BONJOUR";
// $t = array('B', '_', 'N', 'J', '_', 'U', '_');
// echo "Cette méthode doit donner B O N J O U _ et ca donne ";
// afficherTableau(ajouterLesLettres('O', $t, testerLettre('O', str_split($motATrouver), 0)));
// // en l’absence des autres methodes
// // Print_r(ajouterLesLettres('O', $t,[1,4]);
$liste = array('A','B','C') ;
echo "Cette méthode doit donner :\n Les lettres non présentes sont A,B,C \n et ca donne \n" ;
afficherMauvaisesLettres($liste);
