<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

//Creation de variable de dé
$d = new De();
echo $d->toString(); //Renvoi un dé aleatoire
