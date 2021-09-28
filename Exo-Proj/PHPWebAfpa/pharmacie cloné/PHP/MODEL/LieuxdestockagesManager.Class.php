<?php

class LieuxdestockagesManager 
{
	public static function add(Lieuxdestockages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Lieuxdestockages (libelleLieuxDeStockage,Rayon,Etagere) VALUES (:libelleLieuxDeStockage,:Rayon,:Etagere)");
		$q->bindValue(":libelleLieuxDeStockage", $obj->getLibelleLieuxDeStockage());
		$q->bindValue(":Rayon", $obj->getRayon());
		$q->bindValue(":Etagere", $obj->getEtagere());
		$q->execute();
	}

	public static function update(Lieuxdestockages $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Lieuxdestockages SET idLieuxDeStockage=:idLieuxDeStockage,libelleLieuxDeStockage=:libelleLieuxDeStockage,Rayon=:Rayon,Etagere=:Etagere WHERE idLieuxDeStockage=:idLieuxDeStockage");
		$q->bindValue(":idLieuxDeStockage", $obj->getIdLieuxDeStockage());
		$q->bindValue(":libelleLieuxDeStockage", $obj->getLibelleLieuxDeStockage());
		$q->bindValue(":Rayon", $obj->getRayon());
		$q->bindValue(":Etagere", $obj->getEtagere());
		$q->execute();
	}
	public static function delete(Lieuxdestockages $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Lieuxdestockages WHERE idLieuxDeStockage=" .$obj->getIdLieuxDeStockage());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Lieuxdestockages WHERE idLieuxDeStockage =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Lieuxdestockages($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Lieuxdestockages");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Lieuxdestockages($donnees);
			}
		}
		return $liste;
	}
}