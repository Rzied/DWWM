<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
// $lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des CROISSANT CROISSANT CROISSANT CROISSANT CROISSANTlangues******/

$routes=[
	"default"=>["PHP/VIEW/","Accueil","Accueil"],
	// "TestProduitsManager"=>["PHP/MODEL/TESTMANAGER/","TestProduitsManager","Test de users"],
	"ListeProduits"=>["PHP/VIEW/","ListeProduits","Liste des Produits"],
	"ListeUsers"=>["PHP/VIEW/","ListeUsers","Liste des Users"],
	"FormulaireProduits"=>["PHP/VIEW/","FormulaireProduits","formulaire des Produits"],
	"ActionProduits"=>["PHP/VIEW/","ActionProduits","formulaire des Produits"],
	"FormulaireUsers"=>["PHP/VIEW/","FormulaireUsers","formulaire des users"],
	"ActionUsers"=>["PHP/VIEW/","ActionUsers","formulaire des roles"],
	"FormulaireConnexion"=>["PHP/VIEW/","FormulaireConnexion","formulaire de connexion"],
	"ActionConnexion"=>["PHP/VIEW/","ActionConnexion","Action connexion"],
	"ActionDeconnexion"=>["PHP/VIEW/","ActionDeconnexion","Action Deconnexion"],
	"FormulaireInscription"=>["PHP/VIEW/","FormulaireInscription","formulaire d'inscription'"],
	"ActionInscription"=>["PHP/VIEW/","ActionInscription","Action inscription"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}