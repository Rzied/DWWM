<?php
$mode = $_GET['mode'];
$listeProduits = ProduitsManager::getList();
$listeUsers = UsersManager::getList();
switch ($mode){
case "ajouter" :
    {
        echo '<form action="index.php?page=ActionCommandes&mode=ajouter" method="POST">';

        break;
    }
case "details" :
    {
        $idRecherche = $_GET['id'];
        $id = CommandesManager::findById($idRecherche);
        echo '<form method="POST" >';
        break;
    }
case "modifier" :
    {
        $idRecherche = $_GET['id'];
        $id = CommandesManager::findById($idRecherche);
        echo '<form action="index.php?page=ActionCommandes&mode=modifier" method="POST">';
    break;
    }
case "supprimer" :
    {
        echo '<form action="index.php?page=ActionCommandes&mode=supprimer" method="POST">';
    break;
    }
}
if (isset($_GET['id']))
{
$choix = CommandesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idCommande" value="'.$choix->getIdCommande().'"type= "hidden">';?>
    <div class="colonne">
        <div>
        <div class="centre size">Date de Commande :</div>
        <input class="libelle" type="date" name="dateCommande" <?php if($mode != "ajouter") echo 'value= "'.$choix->getdateCommande().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div>
        <div class="centre size">Date de reception :</div>
        <input class="libelle" type="date" name="dateReception" <?php if($mode != "ajouter") echo 'value= "'.$choix->getdateReception().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
        <div class="espace"></div>
    </div>
    <div>
    <div class="espace"></div>
    <select class="libelle marginLight" name="idProduit">

        <?php 
        foreach ( $listeProduits as $unProduit )
        {
            if ($mode != "ajouter")
                {
            $sel = "";
            if ($unProduit->getIdProduit()==$choix->getIdProduit()){
                $sel="selected";
            }
        }
            echo '<option value="'.$unProduit->getIdProduit().'"'.$sel; if($mode=="details" || $mode=="supprimer") echo'disabled'; echo '>'.$unProduit->getNomProduit().'</option>';
        }
        ?>

        </select>
        <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
        <select class="libelle marginLight" name="idUser">

        <?php 
        foreach ( $listeUsers as $unUser )
        {
            if ($mode != "ajouter")
                { 
            $sel = "";
            if ($unUser->getIdUser()==$choix->getIdUser()){
                $sel="selected";
            }
        }
            echo '<option value="'.$unUser->getIdUser().'"'.$sel; if($mode=="details" || $mode=="supprimer") echo'disabled'; echo '>'.$unUser->getNomUser().' '.$unUser->getPrenomUser().' </option>';
        }
        ?>

        </select>
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
<div class="return"><a class="centre size" href="index.php?page=ListeCommandes">Retour</a></div>
<div class="espace"></div>
</div>

</form>