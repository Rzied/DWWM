var particip=0;
var participenf=0;
var participsal=0;
var situation = prompt("Vous ete marié ou célibataire ?");

if (situation=="célibataire") {
    var particip=20;
}
else{
    particip=25;    
}
    console.log(particip);
var enfants = prompt("Vous avez des enfants ?(oui/non)");
if (enfants=="oui") {
    var nbe= parseInt(prompt("Combien d'enfant vous avez ?"));
    var participenf=10*nbe;
    console.log(participenf);
}
// else{
//     participenf=0;
// }
var salaire = parseInt(prompt("Entrez votre salaire mensuel :"));
if (salaire<1200) {
    var participsal=10;
    console.log(participsal);
}
particip+=participenf+participsal;
console.log(particip);
if (particip>50) {
    particip=50;
}
alert("Vous aurez : "+particip+" % de participation");