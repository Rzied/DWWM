<?php

echo '<form method="POST" action="index.php?page=ActionConnexion">
    <div class="contenu colonne">
        <div class="colonne marginLight">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
                Pseudo Utilisateur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="text" name="pseudoUser" placeholder="Pseudo Utilisateur"/>
                <div class="espace"></div>
                </div>
            </div>
            <div class="titreDescriptif centre">
                Mot de passe Utilisateur
                </div>
                <div>
                <div class="espace"></div>
                <input class="libelle" type="password" name="motDePasseUser" placeholder="Mot de passe Utilisateur"/>
                <div class="espace"></div>
            </div>
        </div>
            <div>
            <div class="espace"></div>
            <div class="return marginLight"><a class="centre" href="index.php?page=listeProduits">Retour</a></div>
            <div class="espace"></div>
        </div>
        <div>
        <div class="espace"></div>
            <input type="submit" class="ajouter size marginLight centre" name="submit" value="Se connecter"/>
            <div class="espace"></div>
            </div>
        </div>
</form>';