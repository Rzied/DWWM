<?php

$produits = ProduitsManager::getList();

echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireProduits&mode=ajouter">Ajouter un Produit</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($produits as $unProduit)
    {
        if ($unProduit->getIdProduit()!=1)
        {
            echo '<div class="liste marginLight">
            <div class="espace"></div>
                <div class="libelle centre marginBouton size">'.$unProduit->getNomProduit().'</div>
                <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireProduits&mode=details&id='.$unProduit->getIdProduit().'">Details</a></div>';

                if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
                {
                    echo '<div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=FormulaireProduits&mode=modifier&id='.$unProduit->getIdProduit().'">Modifier</a></div>
                    <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=FormulaireProduits&mode=supprimer&id='.$unProduit->getIdProduit().'">Supprimer</a></div>';
                }
                
            echo '<div class="espace"></div></div>';
        }
    }

    echo '<div class="margin">
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
    <div class="espace"></div>
</div>

</div>

</body>

</html>';