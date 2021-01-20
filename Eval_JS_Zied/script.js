//les variables
var capital = document.getElementById("capital");
var taux = document.getElementById("taux");
var nbMois = document.getElementById("nbMois");
var mensualite = document.getElementById("mensualite");
var cout = document.getElementById("cout");
var lesMsg = document.getElementsByClassName("msg");
var lesInputs = document.getElementsByClassName("checkValidity");
var submit = document.getElementById("submit");
var flag1 = 0;
var flag2 = 0;
var flag3 = 0;
//les verifications de chaque inputs
capital.addEventListener("input", verifCapital);
taux.addEventListener("input", verifTaux);
nbMois.addEventListener("input", veriNbMois);
submit.addEventListener("click", calcul);
//le declenchement de la fonction calcul
for (let i = 0; i < lesInputs.length; i++) {
    lesInputs[i].addEventListener("input", calcul);
}

//declenchement de la fonction qui vide les inputs
var reset = document.getElementById("reset");
reset.addEventListener("click", function () {
    //on vide les champs 
    for (let i = 0; i < lesInputs.length; i++) {
        lesInputs.textContent = "";
    }
    // on autorise ne nouveau à cliquer sur les boutons
    for (let i = 0; i < lesInputs.length; i++) {
        lesInputs[i].addEventListener("input", clickBouton);
    }
});


//fonction calculer 
function calcul() {
    var vMensualite = (capital.value * taux.value / 12) / (1 - Math.pow(1 + taux.value / 12, -nbMois.value));
    // console.log(vMensualite);
    mensualite.value = vMensualite;
    cout.value = vMensualite * nbMois.value
}

function verifCapital() {
    if (lesInputs[0].checkValidity()) {
        flag1 = 1;
        lesMsg[0].textContent = "";
    } else {
        lesMsg[0].textContent = "Format incorrect";
        flag1 = 0;
    }
    verification()
}

function verifTaux() {
    if (lesInputs[1].checkValidity()) {
        flag2 = 1;
        lesMsg[1].textContent = "";
    } else {
        lesMsg[1].textContent = "Format incorrect";
        flag2 = 0;
    }
    verification()
}

function veriNbMois() {
    if (lesInputs[2].checkValidity()) {
        flag3 = 1;
        lesMsg[2].textContent = "";
    } else {
        lesMsg[2].textContent = "Format incorrect";
        flag3 = 0;
    }
    verification()
}
//fonction pour activer et desactiver le bouton calculer
function verification() {
    if (flag1 == 1 && flag2 == 1 && flag3 == 1) {
        submit.disabled = false;
    }
}