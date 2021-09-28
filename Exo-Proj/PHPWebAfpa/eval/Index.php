<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();


/***On récupère la langue de la session/FR par défaut***/
// $lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des CROISSANT CROISSANT CROISSANT CROISSANT CROISSANTlangues******/

$routes=[
	"default"=>["PHP/VIEW/","Accueil","Accueil"],
	"TestElevesManager"=>["PHP/MODEL/TESTMANAGER/","TestElevesManager","Test de Eleves"],
	"TestMatieresManager"=>["PHP/MODEL/TESTMANAGER/","TestMatieresManager","Test de Matieres"],

	"ListeUtilisateur"=>["PHP/VIEW/","ListeUtilisateur","Liste d'Utilisateurs"],
	"FormulaireUtilisateur"=>["PHP/VIEW/","FormulaireUtilisateur","formulaire des Utilisateurs"],
	"ActionUtilisateur"=>["PHP/VIEW/","ActionUtilisateur","Action sur Utilisateurs"],

	"ListeEleve"=>["PHP/VIEW/","ListeEleve","Liste d'Eleves"],
	"FormulaireEleve"=>["PHP/VIEW/","FormulaireEleve","formulaire des Eleves"],
	"ActionEleve"=>["PHP/VIEW/","ActionEleve","Action sur Eleves"],
	
	"ListeMatiere"=>["PHP/VIEW/","ListeMatiere","Liste de Matiere"],
	"FormulaireMatiere"=>["PHP/VIEW/","FormulaireMatiere","formulaire des Matiere"],
	"ActionMatiere"=>["PHP/VIEW/","ActionMatiere","Action sur Matiere"],
	
	"ListeSuivi"=>["PHP/VIEW/","ListeSuivi","Liste de Suivi"],
	"FormulaireSuivi"=>["PHP/VIEW/","FormulaireSuivi","formulaire des Suivi"],
	"ActionSuivi"=>["PHP/VIEW/","ActionSuivi","Action sur Suivi"],


	"FormulaireConnexion"=>["PHP/VIEW/","FormulaireConnexion","formulaire de connexion"],
	"ActionConnexion"=>["PHP/VIEW/","ActionConnexion","Action connexion"],
	"ActionDeconnexion"=>["PHP/VIEW/","ActionDeconnexion","Action Deconnexion"],
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