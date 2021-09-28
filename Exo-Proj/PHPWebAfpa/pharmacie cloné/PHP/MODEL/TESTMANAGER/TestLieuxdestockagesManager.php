<?php

//Test LieuxdestockagesManager

echo "recherche id = 1" . "<br>";
$obj =LieuxdestockagesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Lieuxdestockages(["libelleLieuxDeStockage" => "([value 1])", "Rayon" => "([value 2])", "Etagere" => "([value 3])"]);
var_dump(LieuxdestockagesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = LieuxdestockagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setlibelleLieuxDeStockage("[(Value)]");
LieuxdestockagesManager::update($obj);
$objUpdated = LieuxdestockagesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = LieuxdestockagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = LieuxdestockagesManager::findById(1);
LieuxdestockagesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = LieuxdestockagesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>