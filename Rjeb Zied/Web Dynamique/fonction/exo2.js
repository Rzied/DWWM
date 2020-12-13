function multiplication(x)
{
    var ch="";
    for (var i=1;i<=10;i++)
    {
        var res=i*x;
        ch+="\n"+i+" x "+x+" = "+res;
    }
    return ch;
}
var x=parseInt(prompt("Entrer un chiffre :"));
var m=multiplication(x);
alert(m);