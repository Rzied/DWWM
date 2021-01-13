var codePostal = document.getElementById("codePostal");
var ddn = document.getElementById("ddn");

var logoNom = document.getElementsByClassName("logoNom")
var checkInput = document.getElementsByClassName("checkInput");
var msg = document.getElementById("msg");
var button = document.getElementById("btn");
// var nom=document.getElementById("nom");
// var prenom=document.getElementById("prenom");

var flag1 = false;
var flag2 = false;
var flag3 = false;

var lesInputs = document.querySelectorAll("input");
console.log(lesInputs);
lesInputs.forEach((item) => {
    // item.addEventListener("click", function (e) {
    //     console.log(e.target.name);
    switch (item.name) {
        case "nom":
            item.addEventListener("input", function (e) {
                veString(e.target)
                // console.log(e.target);
                // for (let i = 0; i < e.target.value.length; i++) {
                //     if (!isLetter(e.target.value[i])) {
                //         alert("nom")
                //     }
                // }
            })
            break;
        case "prenom":
            item.addEventListener("input", function (e) {
                veString(e.target)
                // for (let i = 0; i < e.target.value.length; i++) {
                //     if (!isLetter(e.target.value[i])) {
                //         alert("prenom")
                // }
                // }
            })
            break;
        case "ddn":
            ddn.addEventListener("change", veDdn)

            break;
        case "codePostal":
            // codePostal.addEventListener("keyup", function (e) {
            //     // for (let i = 0; i < e.target.value.length; i++) {
            //         if (isNaN(e.target.value) || (e.target.value.length > 5)) {
            //             alert("toto"+e.target.value);
            //             console.log(e.target.value);
            //         }
            //     // }
            // })
            codePostal.addEventListener("input", veCodePostal);
            break;
        default:
            break;
    }
    // });
})

function isLetter(c) {
    return c.toLowerCase() != c.toUpperCase();
}

function veString(input) {
    console.log(input);
    
    var valide = input.parentNode.getElementsByClassName("valide")[0];
    var croix = input.parentNode.getElementsByClassName("croix")[0];
    var msgE = input.parentNode.getElementsByClassName("msg")[0];
    var inputVal = input.value;
    console.log(inputVal);
    if (!isNaN(inputVal)) {
        input.value = input.value.slice(0, -1);
        input.style.border = "3px solid red";
        croix.style.display="flex";
        msgE.innerHTML = "Veuillez ecrire que des lettres !";

        if (input.name == "nom") {
            flag1 = false;
        }
    } else if (input.checkValidity()) {
        input.style.border = "3px solid green";
        croix.style.display="none";
        valide.style.display="flex";
        msgE.innerHTML = "";
        if (input == "nom") {
            flag1 = true;
        }
    } else {
        input.value = input.value.slice(0, -1);
        // input.style.border = "3px solid red";
        msgE.innerHTML = "Veuillez ecrire que des lettres !";
        valide.style.display="none";
        croix.style.display="flex";
    }
    btnEnvoyer(flag1, flag2, flag3);
}

function veDdn() {

    var valide = ddn.parentNode.getElementsByClassName("valide")[0];
    var croix = ddn.parentNode.getElementsByClassName("croix")[0];
    let dateUser = ddn.value;
    let jour = parseInt(dateUser.substring(8, 10));
    let mois = parseInt(dateUser.substring(5, 7));
    let année = parseInt(dateUser.substring(0, 4));
    var msgDDN = ddn.parentNode.getElementsByClassName("msg")[0];
    let date = new Date(année, mois - 1, jour);
    let dateSysteme = new Date();
    if (date > dateSysteme) {
        msgDDN.innerHTML = "la date ne peux pas etre superieur à auj !";
        ddn.style.border = "3px solid red";
        croix.style.display="flex";
        valide.style.display="none";
        flag2 = false;
    } else {
        msgDDN.innerHTML = "";
        ddn.style.border = "3px solid green";
        croix.style.display="none";
        valide.style.display="flex";
        flag2 = true;
    }
    btnEnvoyer(flag1, flag2, flag3);
}

function veCodePostal() {
    var valeur = codePostal.value.toLowerCase();
    var touche = valeur.charCodeAt(valeur.length - 1);
    var msgCP = codePostal.parentNode.getElementsByClassName("msg")[0];
    var valide = codePostal.parentNode.getElementsByClassName("valide")[0];
    var croix = codePostal.parentNode.getElementsByClassName("croix")[0];
    // var checkInputCP = (codePostal.parentNode).getElementsByClassName("checkInput")[0];

    if (touche >= 97 && touche <= 122) {
        codePostal.value = codePostal.value.slice(0, -1);
        msgCP.innerHTML = "il ne faut ecrire que des chiffres !!";
        codePostal.style.border = "3px solid red";
        croix.style.display="flex";
        flag3 = false;
    } else if (valeur.length > 5) {
        codePostal.value = codePostal.value.slice(0, -1);
        msgCP.innerHTML = "il ne faut pas depasser 5 chiffre !!";
        croix.style.display="flex";
        // codePostal.style.border = "3px solid green";
        flag3 = false;
    } else if (codePostal.checkValidity()) {
        codePostal.style.border = "3px solid green";
        croix.style.display="none";
        valide.style.display="flex";
        msgCP.innerHTML = "";
        flag3 = true;
    }
    btnEnvoyer(flag1, flag2, flag3);
}

function btnEnvoyer(flag1, flag2, flag3) {
    if (flag1 == true && flag2 == true && flag3 == true) {
        button.style.color = "green";
        button.style.backgroundColor = "black";
        button.removeAttribute("disabled", "");
    } else {
        button.style.opacity = "1";
        button.setAttribute("disabled", "");
    }

}

// var esp =(codePostal.parentNode).parentNode.getElementsByClassName("espace")[0];
// esp.style.border=("5px solid green")


var valide = codePostal.parentNode.getElementsByClassName("valide")[0];
var croix = codePostal.parentNode.getElementsByClassName("croix")[0];
// croixS.style.display = "none";