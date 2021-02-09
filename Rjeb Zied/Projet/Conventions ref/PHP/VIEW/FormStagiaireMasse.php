<!-- <form action="Index.php?page=ActionStagiaireMasse" method="POST">
<div class="info">       
    <label for="file">Ajouter fichier</label>
    <div class="mini"></div>
    <input type="file" name="file">
    <button class="bouton">Envoyer</button>
</div> -->

<form enctype="multipart/form-data" action="Index.php?page=ActionStagiaireMasse" method="POST">
<div class="info">       
    <label for="file">Ajouter fichier</label>
    <div class="mini"></div>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <input type="file" name="xls-stagiaires"/>
    <div class="mini"></div>
    <button class="bouton">Envoyer</button>
    <div class="mini"></div>
    <a href="Index.php?page=ListeStagiaires"><div class="bouton"><i class="far fa-arrow-alt-circle-left"></i>&nbsp Retour</div></a>
</div>