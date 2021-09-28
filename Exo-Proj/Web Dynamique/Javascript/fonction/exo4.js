function multiplication(x) {
    var ch = "";
    for (var i = 1; i <= 10; i++) {
        var res = i * x;
        ch += "\n" + i + " x " + x + " = " + res;
    }
    return ch;
}

function voyelle(ch) {
    // les voyelle a, e, i, o, u, y
    var compteur = 0;
    var chaine = prompt("Entrer un mot");
    var ch=chaine.toLowerCase();
    console.log(ch);
    for (let i = 1; i <= ch.length; i++) {
        console.log(ch.length);
        console.log(i);
        if (ch[i] == "a" || ch[i] == "e" || ch[i] == "i" || ch[i] == "o" || ch[i] == "u" || ch[i] == "y") {
            var compteur =compteur+ 1;
            console.log(compteur);
        }
        // alert("nombre de voyelle : " + compteur);

    }
    return compteur;
}

function moysom(nb) {
    var nb = 0;
    var s = 0;
    var m = 0;
    var i = 0;
    do {
        nb = parseInt(prompt("Entrer un entier : (0 pour arreter)"));
        i++
        s += nb;
    } while (nb != 0);
    i -= 1;
    m = s / i;
    // alert("la somme est : "+s);
    // alert("la moyenne est : "+m);
    var res = ("la somme est : " + s + "\n" + "la moyenne est : " + m);
    return res;
}





function chercherLettre(lettre, phrase) {
    var p = 0;
    var compteur = 0;
    // index=0;
    var phrase2 = phrase;
    do {
        var index = phrase2.indexOf(lettre, p);
        console.log(index);
        if (index != -1) {
            compteur += 1;
            console.log(compteur);
            p += index + 1;
        }

    } while (index != -1);
    return compteur;
}

var choix = parseInt(prompt("1- Multiples\n2- Somme et moyenne\n3- Recherche du nombre de voyelles\n4- Recherche du nombre des caracteres suivants\nEntrer votre option :"));
switch (choix) {
    case 1:
        var x = parseInt(prompt("entrez un chiffre :"));
        var r = multiplication(x);
        alert(r);
        break;
    case 2:
        var nb = 0;
        // var nb = prompt("entrez un chiffre :");
        var r = moysom(nb);
        alert(r);
        break;
    case 3:
        // var ch= prompt("entrez un mot :");
        var chaine = "";
        var v = voyelle(chaine);
        alert("dans cette chaine il y a "+v+" voyelles");

        break;
    case 4:
        var phrase = prompt("Entrez la phrase");
        var lettre = prompt("Entrer la lettre que vous cherchez");
        var v = chercherLettre(lettre,phrase);
        alert("dans cette chaine il y a "+v+" fois la lettre ("+lettre+").");

        break;
}