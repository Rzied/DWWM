<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");
// on initialise les paramètres du fichier parametre.ini
Parametre::init();
//on active la connexion à la base de données
DbConnect::init();
//Test 

// echo "recherche id = 1" . "<br>";
// $obj =DepartementManager::getById(1,false);
// var_dump($obj);
// echo $obj->toString();

// echo "ajout de l'objet". "<br>";
// $newObj = new Categories(["nomCategorie" => "Test2", "ordonnanceCategorie" => "Non"]);
// var_dump(CategoriesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = DepartementManager::getList(false);
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

// echo "on met à jour l'id 1" . "<br>";
// $obj->setnomCategorie("[(Value)]");
// CategoriesManager::update($obj);
// $objUpdated = CategoriesManager::findById(1);
// echo "Liste des objets" . "<br>";
// $array = CategoriesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

// echo "on supprime un objet". "<br>";
// $obj = CategoriesManager::findById(1);
// CategoriesManager::delete($obj);
// echo "Liste des objets" . "<br>";
// $array = CategoriesManager::getList();
// foreach ($array as $unObj)
// {
// 	echo $unObj->toString() . "<br><br>";
// }

?>