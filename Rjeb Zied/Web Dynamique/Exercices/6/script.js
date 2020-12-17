var par1 = document.getElementById("texte1");
par1.addEventListener("click", function () {
    par1.style.color = "orange";
})
par1.addEventListener("mousedown", function () {
    par1.style.color = "red";
})

// var t1 = document.getElementsByTagName("h1");
// for (let i = 0; i < t1.length; i++) {
//     t1[i].addEventListener("click", function () {
//         for (let i = 0; i < t1.length; i++) {
//             t1[i].style.color = "green";
            
//         }
//     })
// }




var t1 = document.getElementsByTagName("h1");
for (let i = 0; i < t1.length; i++) {
    t1[i].addEventListener("click", function () {
        for (let i = 0; i < t1.length; i++) {
            t1[i].style.color = "green";
            var click=0;
            if (click==0) {
                t1[i].addEventListener("click", function () {
                    for (let i = 0; i < t1.length; i++) {
                        t1[i].style.color = "blue";
                        
                    }
                })
            }
        }
    })
}



for (let i = 0; i < t1.length; i++) {
    t1[i].addEventListener("mousedown", function () {
        for (let i = 0; i < t1.length; i++) {
            t1[i].style.color = "yellow";
        }
    })
}

// var titre1=document.getElementsByTagName("h1");
//     titre1.addEventListener("click",function(){
//     titre1.style.color="green";
// })