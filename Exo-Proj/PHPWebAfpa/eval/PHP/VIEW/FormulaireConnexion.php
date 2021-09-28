<?php

echo '<form method="POST" action="index.php?page=ActionConnexion">

<div class="contenu colonne">


    <div class="ligne">
        <div class="titreDescriptif">
            Pseudo :
        </div>
        <input type="text" name="login" />
    </div>

    <div class="ligne">
        <div class="titreDescriptif">
            Mot de passe :
        </div>
        <input type="text" name="motDePasse" />
    </div>


    <div>
        <div class="espace"></div>
        <input type="submit"  name="submit" value="Valider" />
        <div class="espace"></div>
    </div>
</div>
</form>';