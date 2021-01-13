const requ = new XMLHttpRequest();
const requ1 = new XMLHttpRequest();
// var nom=document.getElementById("nom");
// var prenom=document.getElementById("prenom");
var contenu = document.getElementById("contenu");
requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divCount  = document.getElementById("total");
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            divCount.innerHTML=reponse.nb;
            // nom.innerHTML=reponse[0].nom;
            // prenom.innerHTML=reponse[0].prenom;

        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', '/Ajax/Ajax interne/01 - AJAX Personne/PHP/Model/CountAPI.php', true);
requ.send(null);

requ1.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            var divCount  = document.getElementById("total");
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            for (let i = 0; i < reponse.length; i++) {
                ligne = document.createElement("div");
                ligne.setAttribute("class", "ligne");
                ligne.id = i;
                
                nom = document.createElement("div");
                nom.setAttribute("class", "nom");
                ligne.appendChild(nom);
                prenom = document.createElement("div");
                prenom.setAttribute("class", "prenom");
                ligne.appendChild(prenom);
                contenu.appendChild(ligne);
                nom.innerHTML=reponse[i].nom;
            prenom.innerHTML=reponse[i].prenom;
            }

            

        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ1.open('GET', '/Ajax/Ajax interne/01 - AJAX Personne/PHP/Model/ListeAPI.php', true);
requ1.send(null);
