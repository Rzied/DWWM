// var qte=document.getElementById("qte");
// var pu=document.getElementById("pu");
// var prix=document.getElementById("prix");
// var qte1=document.getElementById("qte1");
// var pu1=document.getElementById("pu1");
// var prix1=document.getElementById("prix1");
// var pt=document.getElementById("pt");

// qte.addEventListener("change", calcule);
// pu.addEventListener("change", calcule);
// qte1.addEventListener("change", calcule);
// pu1.addEventListener("change", calcule);


var lesInputs = document.getElementsByTagName("input");
for (let i = 0; i < lesInputs.length; i++) {
    lesInputs[i].addEventListener("change", calcule);

}

function calcule() {
    prix.value = qte.value * pu.value;
    prix1.value = qte1.value * pu1.value;
    pt.value = parseInt(prix.value) + parseInt(prix1.value);
}