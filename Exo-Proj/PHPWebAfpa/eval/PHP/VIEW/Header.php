<body class="colonne">

<?php $uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
} else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
} else {
    $uri .= "?";
}

?>
    <header>
        <div class="logo">
            <a href="index.php?page=default">
                <img src="./IMG/icone.jpg" alt="logo">
            </a>
        </div>
        <div class="titre">GESTION DES NOTES</div>
        <div class="colonne">
        <div class="titrea">
        <?php

if (isset($_SESSION['utilisateur'])) {
    echo '<div>' . $_SESSION['utilisateur']->getNomUtilisateur() . '</div>';
    echo '</div>
            <div class="connect"><a class="connect" href="index.php?page=ActionDeconnexion"><button>Déconnectez-Vous</button></a>
        </div></div>';
} else {
    echo '</div>
            <div class="connect"><a class="connect" href="index.php?page=FormulaireConnexion"><button>Connectez-Vous</button></a>
        </div></div>';
}
?>



    </header>