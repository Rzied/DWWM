<?php
// function ChargerClasse($classe)
// {
//     require $classe.".Class.php";
// }
// spl_autoload_register("ChargerClasse");

// echo date("d.m.y");

$date = new DateTime("2012-09-01");
// $date->modify("+ 2 days");
echo $date->format('d-m-y');
echo "\n";
$date1=new DateTime("now");

$diff=$date1->diff($date);
echo $diff->format('%d Jours %m Mois %y Ans ');
