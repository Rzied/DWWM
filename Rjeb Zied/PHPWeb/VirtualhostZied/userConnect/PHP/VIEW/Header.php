
<?php

/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}

?>



<header>
    <div class="ligne">
    <div><img src="./IMG/Logo_afpa.jpg" alt=""></div>
    <div class="titre"><?php echo Trad($titre);?></div>
    <div class="langue">
        <div>
            <a href="<?php echo $uri; ?>langue=EN">
                <img src="./IMG/EN.jpg" alt="drapeaux anglais">
            </a>
        </div>
        <div></div>
        <div>
            <a href="<?php echo $uri; ?>langue=FR">
                <img src="./IMG/FR.jpg" alt="drapeaux francais">
            </a>
        </div>
        <div></div>
    </div>
<?php

    if( isset($_SESSION['utilisateur']))
    {
        echo '<div>Bonjour '.$_SESSION['utilisateur']->getNom().'</div>';
        echo '<div><a href="index.php?codePage=deconnection">Déconnecter</a></div>';
    }
    else{
        echo '<a href="index.php?codePage=connection">Connecter</a>';
    }
?>

    </div>
</header>