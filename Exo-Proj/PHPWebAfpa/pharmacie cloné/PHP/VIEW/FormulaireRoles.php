<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajouter" :
    {
        echo '<form action="index.php?page=ActionRoles&mode=ajouter" method="POST">';

        break;
    }
case "details" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        echo '<form action="index.php?page=ActionRoles&mode=modifier" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?page=ActionRoles&mode=supprimer" method="POST">';
    break;
    }
}

if (isset($_GET['id']))
{
$choix = RolesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idRole" value="'.$choix->getIdRole().'"type= "hidden">';?>
    <div class="colonne">
        <div>
        <div class="centre size">Nom :</div>
        <input class="libelle" name="nomRole" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomRole().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    </div>
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
<div class="return"><a class="centre size" href="index.php?page=ListeRoles">Retour</a></div>
<div class="espace"></div>
</div>

</form>