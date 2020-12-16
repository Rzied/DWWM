// les voyelle a, e, i, o, u, y
var compteur = 0;
var ch = prompt("Entrer un mot");
console.log(ch);
for (var i = 1; i <= ch.length; i++) {
    console.log(i);
    if (ch[i].toLowerCase() == "a" || ch[i].toLowerCase() == "e" || ch[i].toLowerCase() == "i" || ch[i].toLowerCase() == "o" || ch[i].toLowerCase() == "u" || ch[i].toLowerCase() == "y") {
        compteur += 1;
        console.log(compteur);
    }
    alert("nombre de voyelle : " + compteur);
}