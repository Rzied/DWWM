var res=0;
var i=1;

var n=parseInt(prompt("Entrer le nombre de multiplication :"));
var x=parseInt(prompt("Entrer l'entier à multiplier :"));
for(i=1;i<=n;i++)
{
    res=i*x;
    alert(i+" x "+x+" = "+res);
}