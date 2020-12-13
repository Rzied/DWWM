var n1=parseInt(prompt("entrer le premier nombre :"));
var n2=parseInt(prompt("entrer le deuxieme nombre :"));
// console.log(n);
// var index=1;
var ch=0;
for ( var index = n1+1; index <= n2-1; index++) {
    // console.log(index);
    ch+=index;
    console.log(ch);
    
}

var msg=alert("La somme des nombres "+ch);