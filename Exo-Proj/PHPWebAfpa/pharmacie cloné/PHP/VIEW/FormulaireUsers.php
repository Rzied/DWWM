<?php

$mode = $_GET['mode'];

$listeRoles = RolesManager::getList();

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionUsers&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = UsersManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionUsers&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = USersManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionUsers&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = UsersManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idUser" value="'.$choix->getIdUser().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Nom du User
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="nomUser" placeholder="Nom du User" value="<?php if ($mode != "ajouter") echo $choix->getNomUser() ;?>"/>
                 <div class="espace"></div>
             </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Prenom du User
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="prenomUser" placeholder="Prenom du User" value="<?php if ($mode != "ajouter") echo $choix->getPrenomUser() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Age du User
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" if($mode=="details" || $mode=="supprimer") echo '" disabled "' name="ageUser" placeholder="Age du User" value="<?php if ($mode != "ajouter") echo $choix->getAgeUser() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
    </div>

    <div>
        <div class="espace"></div>
        <select class="libelle marginLight" name="IdRole">

        <?php 
        foreach ( $listeRoles as $unRole )
        {
            $sel = "";
            if ($unRole->getIdRole()==$id->getIdRole()){
                $sel="selected";
            }
            echo '<option value="'.$unRole->getIdRole().'"'.$sel; if($mode=="details" || $mode=="supprimer") echo'disabled'; echo '>'.$unRole->getNomRole().'</option>';
        }
        ?>

        </select>
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
<div class="return"><a class="centre size" href="index.php?page=ListeUsers">Retour</a></div>
<div class="espace"></div>
</div>

</form>
