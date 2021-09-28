<?php
$Commandes = CommandesManager::getList();

echo '<div class="contenu colonne">
<div>
<div class="espace"></div>
<div class="size centre titre">Liste des Commandes</div>
<div class="espace"></div>
</div>
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=ajouter">'; echo texte("Ajouter une Commande");echo '</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($Commandes as $uneCommande)
    {
        if ($uneCommande->getIdCommande()!=1)
        {
            echo '<div class="liste">
            <div class="espace"></div>
                <div class="libelle centre marginBouton size">'.$uneCommande->getDateCommande().'</div>
                <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=details&id='.$uneCommande->getIdCommande().'">'; echo texte("Details");echo '</a></div>';

                if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
                {
                    echo '<div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=modifier&id='.$uneCommande->getIdCommande().'">'; echo texte("Modifier");echo '</a></div>
                    <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=FormulaireCommandes&choix=Commandes&mode=supprimer&id='.$uneCommande->getIdCommande().'">'; echo texte("Supprimer");echo '</a></div>';
                }

            echo '<div class="espace"></div></div>
            <div class="margin">
            </div>';
        }
    }
echo '</div>
    <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">'; echo texte("Retour");echo '</a></div>
    <div class="espace"></div>
    </div>
</body>

</html>';