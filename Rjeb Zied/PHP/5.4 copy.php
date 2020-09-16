<?php
do
{
    do
    {
        $x = readline("Entrer un nombre : ");
    } while (!is_numeric($x));
     var_dump( $x);
    var_dump( $x*1);
} while (!is_int($x*1));
echo $x;
