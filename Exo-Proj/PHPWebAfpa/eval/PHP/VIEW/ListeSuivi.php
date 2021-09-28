<?php

$Suivi = SuiviManager::getList();
echo '<div class="contenu colonne">
    <div class="margin">
        <div class="espace"></div>
        <select id="selRole" class="libelle marginLight" name="idMatiere">';
        $listmatiere=MatieresManager::getList();
        foreach ($listmatiere as $uneMatiere)
            {
                echo '<option  value="'.$uneMatiere->getIdMatiere().'">'.$uneMatiere->getLibelleMatiere().'</option>';
            }
            
             
      
        echo'</select>
        <div class="espace"></div>
    </div>';
    foreach ($Suivi as $unSuivi)
    {
        // if ($unSuivi->getIdMatiere==$uneMatiere->getIdMatiere) {
          
    //    j'ai perdu du temps pour faire la condition pour laquelle il n'affiche que les les note de matiere selected, je reviens si j'ai le temps
       
            echo '<div class="liste marginLight">
            <div class="espace"></div>
            <div class="libelle centre marginBouton size">'.ElevesManager::findById($unSuivi->getIdEleve())->getNomEleve().'</div>
            <div class="libelle centre marginBouton size">'.ElevesManager::findById($unSuivi->getIdEleve())->getPrenomEleve().'</div>
            <div class="libelle centre marginBouton size">'.$unSuivi->getNote().'</div>';

                if (isset($_SESSION["utilisateur"])&& $_SESSION["utilisateur"]->getRole()==1)
                {
                    echo '<div><a class="centre size" href="index.php?page=FormulaireSuivi&mode=modifier&id='.$unSuivi->getIdSuivi().'"><div><img class="ico" src="./IMG/modifier.png" alt=""></div></a></div>
                    <div><a class="centre size" href="index.php?page=FormulaireSuivi&mode=supprimer&id='.$unSuivi->getIdSuivi().'"><div><img class="ico" src="./IMG/supprimer.png" alt=""></div></a></div>';
                }
                
            echo '<div class="espace"></div></div>';
        // }
     }

    echo '<div class="margin">
    <div class="espace"></div>
    <div class="return"><a class="centre size" href="index.php?page=default">Retour</a></div>
    <div class="espace"></div>
</div>

</div>

</body>

</html>';