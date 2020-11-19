<?php

include "Head.php";
include "Header.php";

echo '<div class="formulaire">
<form action="Addback.php" method="get">
Libelle : 
<input type="text" name="libelleProduit">
Prix : 
<input type="text" name="prix"> 
Date de peremption : 
<input type="date" name="dateDePeremption">
<input type="submit" value="submit">
</form>
<div class="espace"></div>
<div class="espace"></div>
<div class="espace"></div>
<div class="espace"></div>
</div>';
