var ddn = prompt("Entrer votre date de naissance ");
var auj = new Date();
var age = auj.getFullYear()-ddn;
if (age<18) {
    alert("Vous avez "+age+" ans:\nVous etes majeur");    
}
else{
    alert("Vous avez "+age+" ans:\nVous etes mineur");    
}