var obj = document.getElementById("obj");
var distance = 5;

window.addEventListener("keydown", (function(e) {
    switch (e.key) {
        case "ArrowLeft":
            obj.style.left = parseInt(obj.style.left) - distance + 'px';
            break;
        case "ArrowRight":
            obj.style.Right = parseInt(obj.style.Right) + distance + 'px';
            break;
        case "ArrowUp":
            obj.style.top = parseInt(obj.style.top) - distance + 'px';
            break;
        case "ArrowDown":
            obj.style.top = parseInt(obj.style.top) + distance + 'px';
            break;

        default:
            break;
    }
})