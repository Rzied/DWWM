<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");






echo "Il y a " , Produit::getCompteur() , " Produi(s créé \n";