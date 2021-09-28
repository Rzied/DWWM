var i=1;
var ch="";
var nom="";
do { nom=prompt("Entrer le nom N° "+i+":")
    ch+=nom+"\n";
   i++; 
} while (nom!=null);
alert("Les nom que vous avez mis sont :\n");
alert(ch);
alert("le nombre des noms : "+i);
