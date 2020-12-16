var magic= parseInt(Math.random()*100);
alert(magic);
var nb=parseInt(prompt("Devinez le nombre choisie par la machine !"));
// do {
//     if (nb<magic) {
//     // alert("Plus grand!")
//     prompt("Plus grand!")
// }
// else {    
//     // alert("Plus petit!")
//     prompt("Plus petit!")
// }
// } while (nb!=magic);

while (nb!=magic) {
    if (nb<magic) {
        nb=parseInt(prompt("plus grand !"));
    }
    else{
        nb=parseInt(prompt("plus petit !"));
    }
}

    alert("tres bien vous avez gagné !");
