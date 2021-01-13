<?php
$liste = RegionManager::getList(false);
// var_dump($liste);
?>
<h1>Sélectionnez une region</h1>
<div class="contenue colonne">
<select>
<option value="defaut" selected>--Choisissez une region--</option>
    <?php
foreach ($liste as $elt) {
    $sel = "";
    echo '<option value="' . $elt->getIdRegion() . '"' . $sel . '>' . $elt->getLibelleRegion() . '</option>';
}
?>
</select>
    <div class="lDep colonne">
        <div class="unDep">
        </div>
    </div>
</div>
