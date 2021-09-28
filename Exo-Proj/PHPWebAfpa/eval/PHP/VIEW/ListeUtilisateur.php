<?php

$utilisateurs = UtilisateursManager::getList();
echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"> <a class="centre size" href="index.php?page=FormulaireUtilisateur&mode=ajouter">Ajouter un Enseignant</a></div>
        <div class="espace"></div>
    </div>';
foreach ($utilisateurs as $unUtilisateur) {

    echo '<div class="liste marginLight">
            <div class="espace"></div>
            <div class=" centre  size">' . $unUtilisateur->getLogin() . '</div>
            <div class=" centre marginBouton size">' . $unUtilisateur->getNomUtilisateur() . '</div>
            <div class=" centre marginBouton size">' . $unUtilisateur->getPrenomUtilisateur() . '</div>';
                

    if (isset($_SESSION["utilisateur"]) && $_SESSION["utilisateur"]->getRole() == 1) {
        echo '<div><a href="index.php?page=FormulaireUtilisateur&mode=modifier&id='.$unUtilisateur->getIdUtilisateur().'"><div><img class="ico" src="./IMG/modifier.png" alt=""></div></a></div>
            <div><a class="centre size" href="index.php?page=FormulaireUtilisateur&mode=supprimer&id=' . $unUtilisateur->getIdUtilisateur() . '"><div><img class="ico" src="./IMG/supprimer.png" alt=""></div></a></div>';
    }

    echo '<div class="espace"></div></div>';
}

echo '<div class="margin">
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
    <div class="espace"></div>
</div>

</div>

</body>

</html>';