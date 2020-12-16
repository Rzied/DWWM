<?php

$Eleves = ElevesManager::getList();
echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <div class="ajouter"> <a class="centre size" href="index.php?page=FormulaireEleve&mode=ajouter">Ajouter un Eleve</a></div>
        <div class="espace"></div>
    </div>';
    foreach ($Eleves as $unEleve)
    {
       
            echo '<div class="liste marginLight">
            <div class="espace"></div>
            <div class="libelle centre marginBouton size">'.$unEleve->getNomEleve().'</div>
            <div class="libelle centre marginBouton size">'.$unEleve->getPrenomEleve().'</div>
            <div class="libelle centre marginBouton size">'.$unEleve->getClasse().'</div>';

                if (isset($_SESSION["utilisateur"])&& $_SESSION["utilisateur"]->getRole()==1)
                {
                    
                    echo '<div><a class="centre size" href="index.php?page=FormulaireEleve&mode=modifier&id='.$unEleve->getIdEleve().'">div><img class="ico" src="./IMG/modifier.png" alt=""></div></a></div>
                    

                    <div><a class="centre size" href="index.php?page=FormulaireEleve&mode=supprimer&id='.$unEleve->getIdEleve().'"><div><img class="ico" src="./IMG/supprimer.png" alt=""></div></a></div>';
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