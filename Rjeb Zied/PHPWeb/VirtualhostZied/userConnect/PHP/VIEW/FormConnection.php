<form action="index.php?codePage=actionConnection" method="post">
    <div>
        <label for="pseudo"><?php echo trad("Pseudo");?></label>
        <input type="text" name="pseudo" required />
    </div>
    <div>
        <label for="motDePasse"><?php echo trad("mot De Passe");?></label>
        <input type="password" name="motDePasse" required />
    </div>
    
    <button type="submit"><?php echo trad("Valider");?></button>
</form>
<a href="index.php?codePage=inscription"><?php echo trad("s'inscrire");?></a>