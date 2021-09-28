
<form method="POST" action="index.php?page=ActionInscription">
<div class="contenu colonne">
    <div class="colonne marginLight">
            
        <div class="centre size" for="nomUser"><?php echo texte("Nom");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="nomUser" required/>
            <div class="espace"></div>
        </div>
            
    </div>    
    <div class="colonne marginLight">
            
        <div class="centre size" for="prenom"><?php echo texte("Prenom");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="prenomUser" required/>
            <div class="espace"></div>
        </div>
    </div>      
    <div class="colonne marginLight">
            
        <div class="centre size" for="motDePasse"><?php echo texte("Mot de passe");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="Password" name="motDePasseUser" required/>
            <div class="espace"></div>
        </div>  
    </div>   
    <div class="colonne marginLight">
            
        <div class="centre size" for="confirmationMotDePasse"><?php echo texte("Confirmer mot de passe");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="Password" name="confirmationMotDePasse" required/>
            <div class="espace"></div>
        </div>
    </div>
    <div class="colonne marginLight">
            
        <div class="centre size" for="age"><?php echo texte("Age");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="ageUser" required/>
            <div class="espace"></div>
        </div>
    </div>

    <div class="centre size" for="age"><?php echo texte("Role");?>:</div>
    <div>
        <div class="espace"></div>
        <select id="selRole" class="libelle marginLight" name="idRole">';

        <?php 
            
                // $sel = "";
                echo '<option  value="">-----Selectionner un Role-----</option>';  
                echo '<option  value="1">Administrateur</option>';  
                echo '<option  value="2">Utilisateur</option>';      
               
            
        ?>
        </select>
        <div class="espace"></div>
    </div>
    

    <div class="colonne marginLight">
            
        <div class="centre size" for="pseudoUser"><?php echo texte("Pseudo");?> :</div>
        <div>
            <div class="espace"></div>
            <input class="libelle" type="text" name="pseudoUser" required/>
            <div class="espace"></div>
        </div>
    </div>
</div>
<div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=Accueil"><?php echo texte("Retour");?></a></div>
            <div class="espace"></div>
        </div>
<div>
<div class="espace"></div>
<input type="submit" class="ajouter size marginLight centre" name="submit" value="<?php echo texte("Inscrire");?>"/>
<div class="espace"></div>
</div>
</form>
