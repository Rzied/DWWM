var image = document.getElementById("welcome");
image.src = "WelcomeYellow.png";
image.style.border = "double black 6px";
image.addEventListener("mouseover",function(){
    image.style.width="100%";
})
image.addEventListener("mouseout",function(){
    image.style.width="50%";
})


var textes = document.getElementsByClassName("texte");
for (let index = 0; index < textes.length; index++) {
    textes[index].style.fontSize = "1.6em";
}
var texte1 = document.querySelector("#texte1");
texte1.style.backgroundColor = "red";

var titres = document.getElementsByTagName("h1");
for (let index = 0; index < titres.length; index++) {
    titres[index].addEventListener("mouseenter", function () {
        for (let index = 0; index < titres.length; index++) {
            titres[index].style.fontFamily = "Georgia";
            // titres[index].style.color="red";

        }
    })

}
var titres = document.getElementsByTagName("h1");
for (let index = 0; index < titres.length; index++) {
    titres[index].addEventListener("click", jaune)
}

function jaune() {
    for (let index = 0; index < titres.length; index++) {
        titres[index].style.color="orange";
    }
}
var lestitres=document.querySelectorAll(".titre");
for (let index = 0; index < lestitres.length; index++) {
    lestitres[index].addEventListener("mousedown",function(){
        for (let index = 0; index < lestitres.length; index++) {
            lestitres[index].style.color="black";
            
        }
    })
}
var password = document.querySelector('input[type="password"]');
password.addEventListener("focus",function(){
    password.style.backgroundColor='pink';
})
password.addEventListener("blur",function(){
    password.style.backgroundColor='';
})
