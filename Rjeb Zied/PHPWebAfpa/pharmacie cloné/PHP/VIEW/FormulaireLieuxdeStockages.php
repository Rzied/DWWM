<?php

$mode = $_GET['mode'];

switch ($mode) {
    case "ajouter":{
            echo '<form action="index.php?page=ActionLieuxDeStockages&mode=ajouter" method="POST">';

            break;
        }
    case "details":{
            echo '<form method="POST" >';
            break;
        }
    case "modifier":{
            echo '<form action="index.php?page=ActionLieuxDeStockages&mode=modifier" method="POST">';
            break;
        }
    case "supprimer":{
            echo '<form action="index.php?page=ActionLieuxDeStockages&mode=supprimer" method="POST">';
            break;
        }
}

if (isset($_GET['id'])) {
    $choix = LieuxdestockagesManager::findById($_GET['id']);
    // var_dump($choix);
}
?>
<input type="hidden" name="idLieuxDeStockage" <?php if (isset($choix)) {
    echo 'value="' . $choix->getIdLieuxDeStockage() . '"';
}
?>>
        <div class="espace"></div>
    </div>
<div class="contenu colonne">

    <div class="colonne marginLight">
        <div class="titreDescriptif centre">
            Libelle Lieux De Stockage
        </div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="libelleLieuxDeStockage" <?php if (isset($choix)) {
    echo 'value="' . $choix->getLibelleLieuxDeStockage() . '"';
}
if ($mode == "supprimer" || $mode == "details") {
    echo 'disabled';
}
?>/>
            <div class="espace"></div>
        </div>
    </div>

    <div class="colonne marginLight">
        <div class="titreDescriptif centre">
            Rayon
        </div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="Rayon"  <?php if (isset($choix)) {
    echo 'value="' . $choix->getRayon() . '"';
}
if ($mode == "supprimer" || $mode == "details") {
    echo 'disabled';
}
?>/>
            <div class="espace"></div>
        </div>
    </div>
    <div class="colonne marginLight">
        <div class="titreDescriptif centre">
            Etagere
        </div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="Etagere" <?php if (isset($choix)) {
    echo 'value="' . $choix->getEtagere() . '"';
}
if ($mode == "supprimer" || $mode == "details") {
    echo 'disabled';
}
?>/>
            <div class="espace"></div>
        </div>
    </div>
</div>';

<div>
    <div class="espace"></div>

    <div class="espace"></div>
</div>


<!-- <div>

    <div class="return marginLight"><a class="centre" href="index.php?page=ListeLieuxdeStockages">Retour</a></div>
    <input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter" />


</div> -->
<?php
switch ($mode)
{
    case "ajouter":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Ajouter"/></div><div class="espace"></div></div>';
            break;
        }
    case "modifier":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Modifier"/></div><div class="espace"></div></div>';
            break;
        }
    case "supprimer":
        {
            echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight centre" name="submit" value="Supprimer"/></div><div class="espace"></div></div>';
            break;
        }
    
    default:
    {
        echo '<div>';
    }
}
// dans tous les cas, on met le bouton annuler
?>

</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=ListeLieuxdeStockages">Retour</a></div>
<div class="espace"></div>
</div>

</form>