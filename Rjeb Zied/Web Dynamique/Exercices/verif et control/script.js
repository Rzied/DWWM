var char = '&*?!:;,\t#~"^¨%$£?²¤§%*()]{}<>|/`\'';
var num = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
var alph = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
var codePostal = document.getElementById("codePostal");
var ddn = document.getElementById("ddn");
// var nom=document.getElementById("nom");
// var prenom=document.getElementById("prenom");
var lesInputs = document.querySelectorAll("input");
console.log(lesInputs);
lesInputs.forEach((item) => {
    // item.addEventListener("click", function (e) {
    //     console.log(e.target.name);
        switch (item.name) {
            case "nom":
                item.addEventListener("keyup", function (e) {
                    for (let i = 0; i < e.target.value.length; i++) {
                        if (!isLetter(e.target.value[i])) {
                            alert("nom")
                        }
                    }
                })
                break;
            case "prenom":
                item.addEventListener("keyup", function (e) {
                    for (let i = 0; i < e.target.value.length; i++) {
                        if (!isLetter(e.target.value[i])) {
                            alert("prenom")
                        }
                    }
                })
                break;
            case "ddn":
                ddn.addEventListener("change", verifDdn)

                break;
            case "codePostal":
                codePostal.addEventListener("keyup", function (e) {
                    // for (let i = 0; i < e.target.value.length; i++) {
                        if (isNaN(e.target.value) || (e.target.value.length > 5)) {
                            alert("toto"+e.target.value);
                            console.log(e.target.value);
                        }
                    // }
                })
                break;
            default:
                break;
        }
    // });
})

function isLetter(c) {
    return c.toLowerCase() != c.toUpperCase();
}

function verifDdn() {

    let dateUser = ddn.value;
    let jour = parseInt(dateUser.substring(8, 10));
    let mois = parseInt(dateUser.substring(5, 7));
    let année = parseInt(dateUser.substring(0, 4));

    let date = new Date(année, mois - 1, jour);
    let dateSysteme = new Date();
    if (date > dateSysteme) {
        alert("FAUX");
    }
}