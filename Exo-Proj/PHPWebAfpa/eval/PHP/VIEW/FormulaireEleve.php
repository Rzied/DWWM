<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionEleve&mode=ajouter">';
            break;
        }
   
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionEleve&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = ElevesManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionEleve&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = ElevesManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idEleve" value="'.$choix->getIdEleve().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Nom :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if($mode=="supprimer" ) echo '" disabled "'; ?>name="nomEleve" 
                value="<?php if ($mode != "ajouter") echo $choix->getNomEleve() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Prenom :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if($mode=="supprimer" ) echo '" disabled "'; ?>name="prenomEleve" value="<?php if ($mode != "ajouter") echo $choix->getPrenomEleve() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Classe :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if($mode=="supprimer" ) echo '" disabled "'; ?> name="classe"  value="<?php if ($mode != "ajouter") echo $choix->getClasse() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        
    
        <div class="espace"></div>
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
<div class="return"><a class="centre size" href="index.php?page=ListeEleve">Annuler</a></div>
<div class="espace"></div>
</div>

</form>