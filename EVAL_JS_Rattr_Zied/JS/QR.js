
//Contient les solutions aux questions
var lesSolutions={
    "1r": "Panoramix",
    "2r": "Lucky Luke",
    "3r": "Tom",
    "4r": "Kev Adams",
    "5r": "Luffy",
    "6r": "un otaku"
}

/****  Fonctions *****/
function verif(event) {
    // permet de controler la validité d'un champ du formulaire
    // on recupere l'input sur lequel faire la verification
    var monInput = event.target;
    //on recupere les elements correspondant à l'input
    var inputMessage = (monInput.parentNode.parentNode).getElementsByClassName('message')[0];

    if (!monInput.checkValidity()) {
        // force le test du pattern sur l'input
        inputMessage.innerHTML = monInput.validationMessage //"Format incorrect";
        tabErreur[monInput.id] = -1;
        if (monInput.value=="") {
            inputMessage.innerHTML = "Champ manquant"
        }
    } 
     else //if (monInput.checkValidity())
    {
        inputMessage.innerHTML = "";
        tabErreur[monInput.id] = 1;
    }
    verifForm();
}
function verifForm() {
    // verifie la validité de tout le formulaire
    for (var key in tabErreur) {
        if (tabErreur[key] <= 0)
            return false;
    
    }
    document.getElementById("soumettre").disabled = false;
    return true;
}

function reset() {
    //remise à 0 des inputs
    for (i = 0; i < lesInputs.length; i++) {
        lesInputs[i].value = "";
    }
    var lesMessages = document.getElementsByClassName("message");
    for (let i = 0; i < lesMessages.length; i++) {
         lesMessages[i].innerHTML="";  
    }
    document.getElementById("soumettre").disabled = true;
}

/**** Variables *****/

var tabErreur = { // contient 0 si le champ est vide; 1 s'il est OK; -1 s'il y a une erreur
    "1r": 0,
    "2r": 0,
    "3r": 0,
    "4r": 0,
    "5r": 0,
    "6r": 0
};
//on affecte les inputs
var lesInputs = document.getElementsByTagName("input");
for (i = 0; i < lesInputs.length; i++) {
    lesInputs[i].addEventListener("input", verif);
}
console.log(tabErreur);
//on affecte le bouton nouveau calcul
document.getElementById("reset").addEventListener("click", reset);