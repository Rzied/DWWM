function produit(x,y)
{
    var res=x*y;
    return res;
}
function cube(x)
{
    var res=x*x*x;
    return res;
}

var x=parseInt(prompt("Entrer l'entier X :"));
var y=parseInt(prompt("Entrer l'entier Y :"));
var z=produit(x,y);
var c=cube(x);
// alert(z);
document.write("Le cube de "+x+" est égal à "+c);
document.write("\nLe produit de "+x+" est égal à "+z);