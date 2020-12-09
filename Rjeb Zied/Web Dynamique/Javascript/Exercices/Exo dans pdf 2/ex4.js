var PU=parseInt(prompt("Entrer le Prix unitaire :"));
var QTECOM=parseInt(prompt("Entrer la quantité commandée :"));
var TOT=PU*QTECOM;
// alert (TOT);
if (TOT<500) {
    var PORT=(TOT/100)*2;
        if (PORT<6) {
            var PORT=6;
        }
    TOT+=PORT;
    
}
else{
    var remise=
}