<?php
$roles = RolesManager::getList();
if (isset($_SESSION["user"]) && $_SESSION["user"]->getIdRole() == 2) {
    echo '<div class="contenu colonne">
<div>
<div class="espace"></div>
<div class="size centre titre">Liste des roles</div>
<div class="espace"></div>
</div>
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"><a class="centre size" href="index.php?page=FormulaireRoles&choix=roles&mode=ajouter">Ajouter un Role</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($roles as $unRole) 
    {
        if ($unRole->getIdRole() != 1) 
        {
            echo '<div class="liste">
            <div class="espace"></div>
            <div class="libelle centre marginBouton size">' . $unRole->getNomRole() . '</div>
            <div class="details centre marginBouton"><a class="centre size" href="index.php?page=FormulaireRoles&choix=roles&mode=details&id=' . $unRole->getIdRole() . '">Details</a></div>';

            if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==2)
            {
            echo '<div class="modifier centre marginBouton"><a class="centre size" href="index.php?page=FormulaireRoles&choix=roles&mode=modifier&id=' . $unRole->getIdRole() . '">Modifier</a></div>
            <div class="supprimer centre marginBouton"><a class="centre size" href="index.php?page=FormulaireRoles&choix=roles&mode=supprimer&id=' . $unRole->getIdRole() . '">Supprimer</a></div>';
            }
            
            echo '<div class="espace"></div>
            </div>
        <div class="margin">
        </div>';
        }
    }
    echo '</div>
    <div>
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
    <div class="espace"></div>
    </div>
</body>

</html>';
}
