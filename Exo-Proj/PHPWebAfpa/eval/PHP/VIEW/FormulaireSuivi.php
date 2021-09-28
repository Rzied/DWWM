<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionSuivi&mode=ajouter">';
            break;
        }
   
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionSuivi&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = SuiviManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionSuivi&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = SuiviManager::findById($_GET['id']);
    // $eleve=ElevesManager::findById($choix->getIdEleve());
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idSuivi" value="'.$choix->getIdSuivi().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <?php
        echo '<select  class="libelle marginLight" name="idEleve">';
        $listEleve=MatieresManager::getList();
        foreach ($listEleve as $unEleve)
            {
                echo '<option  value="'.$unEleve->getNomEleve().'">'.$unEleve->getNomEleve().'</option>';
            }
            
             
      
        echo'</select>';
        ?>
            <div>
                <div class="espace"></div>
      
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Note :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if($mode=="supprimer" ) echo '" disabled "'; ?>name="note" value="<?php if ($mode != "ajouter") echo $choix->getNote() ;?>"/>
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