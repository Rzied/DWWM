var nb1 = parseInt(prompt("Entrer le premier nombre :"));
var nb2 = parseInt(prompt("Entrer le deuxieme nombre :"));
var op = prompt("Entrer l'operateur :");
switch (op) {
    case "+":
        var res = nb1 + nb2;
        alert(res);
        break;
    case "-":
        var res = nb1 - nb2;
        alert(res);
        break;
    case "*":
        var res = nb1 * nb2;
        alert(res);
        break;
    case "/":
        if (nb2 == 0) {
            alert("Erreur");
        } else {
            var res = nb1 / nb2;
            alert(res);
        }
        break;

    default:
        alert("Erreur");
        break;
}