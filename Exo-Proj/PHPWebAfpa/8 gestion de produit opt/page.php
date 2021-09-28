<?PHP
/* Autoload permet de charger toutes les classes necessaires */
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");

/**
 * Méthode qui permet d'affichre une page en fonction de ces paramètres
 * $page tableau contenant 3 valeurs    le chemein d'acces à la page
 *                                      le nom de la page
 *                                      le titre à afficher sur la page
 */
function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/Footer.php';
}

//on active la connexion à la base de données
DbConnect::init();

/* création d'u tableau de redirection, en fonction du code, on choisit la page à afficher */
$routes = [
    "default" => ["PHP/VIEW/", "Accueil", "Liste de Tables"],
    // "default" => ["PHP/VIEW/", "Liste", "Liste de produits"],

    "liste" => ["PHP/VIEW/", "Liste", "Liste de produits"],
    "listeClient" => ["PHP/VIEW/", "ListeClient", "Liste de Clients"],

    "formProduit" => ["PHP/VIEW/", "FormProduit", "Détail du produit"],
    "formClient" => ["PHP/VIEW/", "FormClient", "Détail du client"],
    
    "actionProduit" => ["PHP/VIEW/", "ActionProduit", "Mise à jour du produit"],
    "actionClient" => ["PHP/VIEW/", "ActionClient", "Mise à jour du client"],
    
    
    
];

if (isset($_GET["code"]))
{

    $code = $_GET["code"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$code]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$code]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}