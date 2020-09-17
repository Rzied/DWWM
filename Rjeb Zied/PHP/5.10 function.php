<?php
// Fonction de saisi de nombre
function demandeEntierPhrase($msg) // Demande un entier à l'utilisateur
{
    do
    {
        do
        {
            $nombre = readline($msg);
        } while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
    } while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
    return $nombre; //renvoi le nombre saisi
}

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


$n=demandeEntierPhrase("Entrer le nombre de chevaux partants : ");
$p=demandeEntierPhrase("le nombre de chevaux joués: ");


$factN = factorielle($n);
$factP = factorielle($p);
$factNp = factorielle($n-$p);

$x = $factN / $factNp;
$y = $factN / ($factP * $factNp);

echo "Dans l’ordre : une chance sur ", $x, " de gagner\n";
echo "Dans le désordre : une chance sur ", $y, " de gagner\n";
