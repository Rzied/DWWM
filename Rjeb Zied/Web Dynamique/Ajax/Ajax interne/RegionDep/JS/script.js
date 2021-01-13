const requ = new XMLHttpRequest();
var lDep = document.getElementsByClassName("lDep")[0];
var select = document.getElementsByTagName("select")[0];

requ.onreadystatechange = function (event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            console.log(reponse);
            lDep.innerHTML = "";
            //on traite les éléments de la liste ....
            for (let i = 0; i < reponse.length; i++) { //on traite les éléments de la liste ....
                ajoutDepartement(reponse[i].libelleDepartement, reponse[i].idDepartement);
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};


select.addEventListener("change", selRegion);


function selRegion(e) {
    if (select.value != "defaut") // si c'est pas le choix par defaut
    {
        // je lance une requete Ajax
        requ.open('POST', 'index.php?codePage=listeAPI', true);
        requ.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        var id = select.value;
        var args = "idRegion=" + id;
        requ.send(args);
    }

}


function ajoutDepartement(libDepart, idDepart) {

    let dept = document.createElement("div");
    dept.setAttribute("class", "unDep");
    dept.setAttribute("id", idDepart);
    dept.innerHTML = libDepart;
    lDep.appendChild(dept);
}