<?php

$Matieres = MatieresManager::getList();
echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"> <a class="centre size" href="index.php?page=FormulaireMatiere&mode=ajouter">Ajouter une Matiere</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($Matieres as $uneMatiere)
    {
       
            echo '<div class="liste marginLight">
            <div class="espace"></div>
            <div class="libelle centre marginBouton size">'.$uneMatiere->getLibelleMatiere().'</div>';

                if (isset($_SESSION["utilisateur"])&& $_SESSION["utilisateur"]->getRole()==1)
                {
                    echo '<div><a class="centre size" href="index.php?page=FormulaireMatiere&mode=modifier&id='.$uneMatiere->getIdMatiere().'"><div><img class="ico" src="./IMG/modifier.png" alt=""></div></a></div>
                    <div><a class="centre size" href="index.php?page=FormulaireMatiere&mode=supprimer&id='.$uneMatiere->getIdMatiere().'"><div><img class="ico" src="./IMG/supprimer.png" alt=""></div></a></div>';
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