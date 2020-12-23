var nb = [1, 2, 3, 4, 5, 6, 7, 8, 1, 2, 3, 4, 5, 6, 7, 8]
    .map(p => [p, Math.random()])
    .sort((a, b) => a[1] - b[1])
    .map(p => p[0])

console.log(nb);
// var pic=document.getElementById("test");
// pic.addEventListener("click", function(e){
//     pic.src="./Images/1.jpg";  
// })
var pics = document.getElementsByTagName("img");
var eltScore = document.getElementById("score")
var score = 0;
var step = 1;
var p1, p2;
var timer = null;


for (let i = 0; i < pics.length; i++) {
    pics[i].src2 = "Images/" + nb[i] + ".jpg";
    // pics[i].addEventListener("click", function(e){
    //     e.target.src=e.target.src2;
    // })
}



document.addEventListener("click", function (e) {
    switch (step) {
        case 1: //premier click
            if (e.target.tagName == "IMG") {
                e.target.src = e.target.src2;
                p1 = e.target;
                step = 2;
            }
            break;
        case 2: //deuxieme click
            if (e.target.tagName == "IMG") {
                e.target.src = e.target.src2;
                p2 = e.target;
                step = 3;
            }
            timer = setTimeout(comparer, 1200);
            break;
        case 3: // click suivant : comparaison
            clearTimeout(timer);
            comparer();
            break;

    }

})

function comparer() {
    if (p1.src2 == p2.src2) {
        alert("Bien !")
        p1.replaceWith(document.createElement('div'));
        p2.replaceWith(document.createElement('div'));
        score += 50;
    } else {
        p2.src = p1.src = "Images/plage.jpg";
        score = Math.max(0, score - 30)
    }
    step = 1;
    eltScore.textContent = score;
    if (document.getElementsByTagName("IMG").length == 0) {
        eltScore.textContent += " Gagné !"
    }
}