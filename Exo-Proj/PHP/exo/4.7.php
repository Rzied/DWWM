<?php

$age = readline("Entrer votre age : ");
$per = readline("depuis quand vous avez le permis ?");
$acc = readline("combien avez-vous fait d'accdient?");
$fid = readline("Depuis quand vous-etes inscrit chez nous?");

if ($fid >= 1) {
    echo "Votre couleur est BLEU";
} elseif ($age > 25 & $per > 2 & $acc == 0) {
    echo "Votre couleur est Vert";
} elseif (($age < 25 & $per > 2) or ($age > 25 & $per < 2) or ($age > 25 & $per > 2 & $acc == 1)) {
    echo "Votre couleur est Orange";
} elseif (($age < 25 & $per < 2 & $acc == 0) or ($age < 25 & $per > 2 & $acc == 1) or ($age > 25 & $per < 2 & $acc == 1) or ($age > 25 & $per > 2 & $acc == 2)) {
    echo "Votre couleur est ROUGE";
} else {
    echo "Desolee vous etes refuséééé !";
}
