<!DOCTYPE html>
<html lang="Fr">
<head>
<?php

function chargerClasse($classe)
{
    if (file_exists("Php/Controller/" . $classe . ".class.php"))
    {
        require "Php/Controller/" . $classe . ".class.php";
    }
    else  if (file_exists("../Controller/" . $classe . ".class.php"))
    {
        require "../Controller/" . $classe . ".class.php";
    }

    if (file_exists("Php/Model/" . $classe . ".class.php"))
    {
        require "Php/Model/" . $classe . ".class.php";
    }
    else if (file_exists("../Model/" . $classe . ".class.php"))
    {
        require "../Model/" . $classe . ".class.php";
    }

}
spl_autoload_register("chargerClasse");

// initialise une connection
DbConnect::init();
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre)) ? '<title>' . $titre . '</title>' : '<title> Titre de la page </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
if (file_exists("./css/style.css"))
    {
        echo '<link rel="stylesheet" href="./CSS/style.css">';
    }
    else 
    {
        echo '<link rel="stylesheet" href="../../CSS/style.css">';
    }
?>
</head>
