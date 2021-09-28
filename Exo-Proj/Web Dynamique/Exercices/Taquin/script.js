//fonction random
var nb = [1, 2, 3, 4, 5, 6, 7, 8];
var nb2 = new Array;
for (let i = 0; i < nb.length; i++) {
    nb2[i] = [nb[i], Math.floor(Math.random() * 100)]
}
nb2.sort((a, b) => a[1] - b[1]);
for (let i = 0; i < nb.length; i++) {
    nb[i] = nb2[i][0];
}
console.log(nb);

var butPl = document.getElementsByClassName("plein");
var butV = document.getElementsByClassName("vide")[0];
// console.log(butPl);
for (let i = 0; i < butPl.length; i++) {
    butPl[i].textContent = nb[i];
}
document.addEventListener("click", function (e) {
    if (e.target.getAttribute("class") == "plein") {
        e.target.setAttribute("class", "vide");
        butV.textContent = e.target.textContent;
        e.target.textContent = "";
        butV.setAttribute("class", "plein");
         butV = document.getElementsByClassName("vide")[0];
    }
})