var Nom = prompt("Entrez Votre Nom");
var Prenom = prompt("Entrez Votre Prenom");
var Genre = prompt("Vous ete un homme ou une femme ?");
console.log(Nom,Prenom,Genre);
if (Genre=="Homme") {
    alert ("Bonjour Mr "+Nom+" "+Prenom);
}
else{
    
    alert ("Bonjour Mme "+Nom+" "+Prenom);
}
