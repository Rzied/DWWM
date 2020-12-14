var nb = 1;
var min = nb;
var max = nb;
// var i=0;
do {
    nb = parseInt(prompt("Entrer un entier : (0 pour arreter)"));
    // i++
    if (nb != 0) {
        if (min >= nb ) {
            min = nb;
        } else if (max <= nb) {
            max = nb;
        }
    }
} while (nb != 0);

alert("le min est : " + min);
alert("le max est : " + max);