<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionUtilisateur&mode=ajouter">';
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionUtilisateur&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = UtilisateursManager::findById($idRecherche);
            break;
        }
    case "supprimer":
        {
            echo '<form method="POST" action="index.php?page=ActionUtilisateur&mode=supprimer">';
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = UtilisateursManager::findById($_GET['id']);
}

?>

<?php if($mode != "ajouter") echo  '<input name= "idUtilisateur" value="'.$choix->getIdUtilisateur().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Pseudo :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if($mode=="supprimer" ) echo '" disabled "'; ?>name="login" value="<?php if ($mode != "ajouter") echo $choix->getLogin() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Nom :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if( $mode=="supprimer" ) echo '" disabled "'; ?>name="nomUtilisateur" value="<?php if ($mode != "ajouter") echo $choix->getNomUtilisateur() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Prenom :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if( $mode=="supprimer" ) echo '" disabled "'; ?> name="prenomUtilisateur" value="<?php if ($mode != "ajouter") echo $choix->getPrenomUtilisateur() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Matière :
            </div>
           
            <?php 
            if($mode != "ajouter")
            {
                $idm= $choix->getIdMatiere();
            $listeMat=MatieresManager::findById($idm);
            }
            ?>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if( $mode=="supprimer" ) echo '" disabled "'; ?> name="libelleMatiere" value="<?php if ($mode != "ajouter") echo $listeMat->getLibelleMatiere() ;?>"/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Mot de passe :
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" type="text" <?php if( $mode=="supprimer" ) echo '" disabled "'; ?> name="motDePasse" value="<?php if ($mode != "ajouter") echo 'Saisir un mot de passe pour le modifier ';?>"/>
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
<div class="return"><a class="centre size" href="index.php?page=ListeUtilisateur">Annuler</a></div>
<div class="espace"></div>
</div>

</form>