var nb=0;
var s=0;
var m=0;
var i=0;
do {
    nb=parseInt(prompt("Entrer un entier : (0 pour arreter)"));
    i++
    s+=nb;
} while (nb!=0);
i-=1;
m=s/i;
alert("la somme est : "+s);
alert("la moyenne est : "+m);