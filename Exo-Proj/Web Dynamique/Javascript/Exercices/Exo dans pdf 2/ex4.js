var PU = parseInt(prompt("Entrer le Prix unitaire :"));
var QTECOM = parseInt(prompt("Entrer la quantité commandée :"));
var TOT = PU * QTECOM;
// alert (TOT);
if (TOT < 500) {
    var PORT = (TOT / 100) * 2;
    if (PORT < 6) {
        var PORT = 6;
    }
    var PAP = TOT+PORT;
    if (TOT < 201 & TOT > 99) {
        REM = (TOT / 100) * 5;
        PAP=TOT-REM;
    }
    else if (TOT>200){
        REM=(TOT/100)*10;
        PAP=TOT-REM;
    }

}
alert(PAP);