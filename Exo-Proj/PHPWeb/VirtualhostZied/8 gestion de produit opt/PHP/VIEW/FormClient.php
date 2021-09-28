<?php
$mode=$_GET['mode'];
switch ($mode) {
    case "ajout":
        {
            echo '<h5>Ajouter un nouveau client</h5></div>
	<form id="formulaire" method="post" action="page.php?code=actionClient&mode=ajoutClient">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "edit":
        {
            echo '<h5>Editer un Client</h5></div>
	<form id="formulaire" method="post" >';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "modif":
        {
            echo '<h5>Modifier un  Client</h5></div>
	<form id="formulaire" method="post" action="page.php?code=actionClient&mode=modifClient">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "delete":
        {
            echo '<h5>Supprimer un  Client</h5></div>
	<form id="formulaire" method="post" action="page.php?code=actionClient&mode=delClient">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
}
if (isset($_GET['id'])) {
    $prod = ClientsManager::findById($_GET['id']);
}
?>
<!-- 
on crée les inputs du formulaire
il faut que les name des input correspondent aux attributs de la class
si on a les informations (cas edit, modif, supp) on les mets à jour -->

<input type="hidden" name="idClient" value="<?php if (isset($prod)) echo $prod->getIdClient(); ?>">
<div class="ligneDetail">
    <div class="libelleInput"> Nom :</div>
    <div class="input"> <input type="text" name="nomClient"
            value="<?php if (isset($prod)) echo $prod->getNomClient(); ?>"></div>
</div>
<div class="ligneDetail">
    <div class="libelleInput">
        Prenom :</div>
    <div class="input"> <input type="text" name="prenomClient" value="<?php if (isset($prod)) echo $prod->getPrenomClient(); ?>">
    </div>
</div>
<div class="ligneDetail">
    <div class="libelleInput">
        Date de naissance :</div>
    <div class="input">
        <input type="date" name="dateDeNaissance"
            value="<?php if (isset($prod)) echo $prod->getDateDeNaissance(); ?>">
    </div>
</div>

<?php 
// en fonction du mode, on affiche les boutons utils
	switch ($mode) {
		case "ajout":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Ajouter" class=" crudBtn crudBtnEdit"/>'; break;
			}
		case "modif":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Modifier" class=" crudBtn crudBtnModif"/>'; break;
			}
		case "delete":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Supprimer" class=" crudBtn crudBtnSuppr" />'; break;
			}
        
        default:
        {
            echo '<div class="ligneDetail">';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <a href="page.php?code=listeClient" class=" crudBtn crudBtnRetour">Annuler</a>
</div>

</form>