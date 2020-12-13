function chercherLettre(lettre,phrase)
{
    var p=0;
    var compteur=0;
    // index=0;
    var phrase2=phrase;
    do {
        var index=phrase2.indexOf(lettre,p);
        console.log(index);
        if (index!= -1) {
            compteur+=1;
            console.log(compteur);
           p+=index+1; 
        }
        
    } while (index!=-1);
    return compteur;
}
var phrase=prompt("Entrer votre phrase :");
var lettre=prompt("Entrer la lettre à chercher");
var res=chercherLettre(lettre,phrase);
alert(res);