var nb1 = document.getElementById("nb1");
var nb2 = document.getElementById("nb2");
var result = document.getElementById("result");
var resultat = document.getElementById("resultat");
resultat.addEventListener("click", calcule)
var op = document.getElementById("op");

function calcule() {
    switch (op.value) {
        case "+":
            result.value = parseInt(nb1.value) + parseInt(nb2.value);
            break;
        case "-":
            result.value = parseInt(nb1.value) - parseInt(nb2.value);
            break;
        case "/":
            result.value = parseInt(nb1.value) / parseInt(nb2.value);
            break;
        case "*":
            result.value = parseInt(nb1.value) * parseInt(nb2.value);
            break;

        default:
            break;
    }
    
}