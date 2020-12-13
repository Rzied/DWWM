var n=parseInt(prompt("entrer un nombre"));
// console.log(n);
// var index=1;
var ch="";
for ( var index = n-1; index >= 0; index--) {
    // console.log(index);
    ch+=index+"/";
    // console.log(msg);
    
}

var msg=alert("Les nombres inferieur à "+n+" : "+ch+"\nIl y a "+n+" nombres au total");