var jeunes = 0;
var moyens = 0;
var vieux = 0;
do {
    var age = parseInt(prompt("Entrer l'age :"));
    if (age < 20) {
        jeunes += 1;

    } 
    else if (age > 40) {
        vieux += 1;
    }
    else{
        moyens+=1;
    }
} while (age != 100);
alert("le nombre des jeunes : "+jeunes+"\nle nombre des moyens : "+moyens+"\nle nombre des vieux : "+vieux);