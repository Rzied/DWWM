<?php

function demandeEntier($invite) // Demande un entier à l'utilisateur

{
    do {
        do {
            $nombre = readline($invite);
        } while (!is_numeric($nombre) || !$nombre > 0); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

/**
 * Undocumented function
 *
 * @param array $plateau tableau de jeux à remplire 
 * @param string $symbole   symbole choisi par chaque joueurs
 * @param array $positions  la position du pion dans le plateau
 * @return array   renvoi tableau remplie
 */
function remplirTableau($plateau, $symbole, $positions)
{
    $plateau[$positions[0]][$positions[1]] = $symbole;
    return $plateau;
}


function lancerPartie()
{       //msg de bienvenue
    echo "\n\n\t\t*****\tBIENVENUE AU MORPION\t*****\t\t\n\n";

do {

    do {
        $nbUser = demandeEntier("Entrer le nombre de joueurs : \n");
    } while ($nbUser <2 || $nbUser > 10);
    do {
        $nbCol = demandeEntier("Entrer le nombre de colonne : \n");
    } while ($nbCol<3 || $nbCol > 25);
    do {
        $nbLig = demandeEntier("Entrer le nombre de lignes  : \n");
    } while ($nbLig<3 || $nbLig > 25);
    $max=$nbCol>$nbLig? $nbCol:$nbLig;


    do {
        $alignementPourGagner = demandeEntier("Entrer le nombre d'alignement Pour Gagner : \n");
    } while ($alignementPourGagner<1 || $alignementPourGagner >$max);
    
    $max=$nbCol>$nbLig? $nbCol:$nbLig;
    $nbcases=$nbCol*$nbLig;
} while ($nbcases < $nbUser*$alignementPourGagner+1);

$plateau = creationTableau($lig, $col);
    $symboles = choixSymbole($nbJoueur);
    $joueurEnCours = joueurSuivant($nbJoueur, null);
    $afficherTab = afficherTableau($plateau);
    $selecPosition = selectionPosition($plateau, $joueurEnCours);
    $positions = convertionPosition($selecPositions);
    $ajouterSymbTab = remplirTableau($plateau,$symboles,$positions);
    $testGagner = testerGagner($plateau,$alignementPourGagner);
    $calculAlignement = compteAlignes($plateau,$positions,$direction);

    echo "\nLe joueur en cours est : ", $joueurEnCours;
   
    
}

    // $plateau = creationTableau($lig, $col);
    // $symboles = choixSymbole($nbJoueur);
    // $joueurEnCours = joueurSuivant($nbJoueur, null);
    // echo "\nLe joueur en cours est : ", $joueurEnCours;