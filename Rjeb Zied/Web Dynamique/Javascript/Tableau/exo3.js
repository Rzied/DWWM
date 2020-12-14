var t=["Jeanne","Christian","Jane","Mary","Lawrence","James","Joseph","Michel","Louis","Clarence","George","Robert","Thomas","Wilson","Marguerite","Anne","Frank","Gene","Henry","Richard"];

alert(t);
var nom=prompt("Entrez le nom que vous cherchez :");
var p=t.indexOf(nom);
t.slice(p,1);
alert(t);