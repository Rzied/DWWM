<?php
require "-REF.php";

$n = saisi();
$tab = remplir($n);

$negatifs = 0;
$positifs = 0;
foreach ($tab as $elt) {
    if ($elt < 0) {
        $negatifs++;
    } else {
        $positifs++;
    }
}
echo "Le nombre de valeurs négatives: " . $negatifs . ".\n Le nombre de valeurs positives: " . $positifs . ".";
