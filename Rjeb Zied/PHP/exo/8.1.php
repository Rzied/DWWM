<?php

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 13; $j++) {
        $tab[$i][$j] = 0;
    }
}

// var_dump($tab);

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 13; $j++) {
        echo $tab[$i][$j] . "\t";
    }
}
