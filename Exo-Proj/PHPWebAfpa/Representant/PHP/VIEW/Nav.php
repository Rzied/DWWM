<nav>
    
<?php
    if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==1)
    {
        echo '<div><a class="centre size" href="index.php?page=ListeUsers">';?><?php echo texte("Users");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?page=FormulaireInscription">';?><?php echo texte("Inscription");?><?php echo'</a></div>';

    }
    echo '<div><a class="centre size" href="index.php?page=ListeProduits">';?><?php echo texte("Produits");?><?php echo'</a></div>';
  
    if (!isset($_SESSION["user"]))
    {
        echo '<div><a class="centre size" href="index.php?page=FormulaireConnexion">';?><?php echo texte("Connection");?><?php echo'</a></div>';
    }


    if (isset($_SESSION["user"]))
    {
        echo '
        
        <div><a class="centre size" href="index.php?page=ActionDeconnexion">';?><?php echo texte("Deconnection");?><?php echo'</a></div>';
    }

    ?>
</nav>