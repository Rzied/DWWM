var carre = document.getElementById("obj");
var distance = 5;

carre.style.position = 'absolute';
carre.style.left = 0;
carre.style.top = 0;

window.addEventListener("keydown", function (e) {
            switch (e.key) {
                case "ArrowLeft":
                    carre.style.left = parseInt(carre.style.left) - distance + 'px';
                    break;
                case "ArrowRight":
                    carre.style.left = parseInt(carre.style.left) + distance + 'px';
                    break;
                    
                case "ArrowUp":
                    carre.style.top = parseInt(carre.style.top) - distance + 'px';
                    break;
                case "ArrowDown":
                    carre.style.top = parseInt(carre.style.top) + distance + 'px';
                    break;
            }
        });