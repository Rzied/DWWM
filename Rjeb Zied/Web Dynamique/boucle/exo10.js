var nb = parseInt(prompt("entrer un nombre :"));
if (nb < 2) {
    alert("le nombre " + nb + " n'est pas premier");
} 
    for (let i = 2; i < nb; i++) {
        var test=true;
        if (nb % i == 0) {
            var test = false;
            console.log(test);
        }
        //  else {
        //     test = true;
        // }
    }
    if (test == true) {
        alert("le nombre " + nb + " est premier");
    }
    else{
        alert("le nombre "+nb+" n'est pas premier");
    }
