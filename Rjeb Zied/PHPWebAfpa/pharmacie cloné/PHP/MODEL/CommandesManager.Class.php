<?php

class CommandesManager 
{
	public static function add(Commandes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Commandes (dateCommande,dateReception,idProduit,idUser) VALUES (:dateCommande,:dateReception,:idProduit,:idUser)");
		$q->bindValue(":dateCommande", $obj->getDateCommande());
		$q->bindValue(":dateReception", $obj->getDateReception());
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}

	public static function update(Commandes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Commandes SET idCommande=:idCommande,dateCommande=:dateCommande,dateReception=:dateReception,idProduit=:idProduit,idUser=:idUser WHERE idCommande=:idCommande");
		$q->bindValue(":idCommande", $obj->getIdCommande());
		$q->bindValue(":dateCommande", $obj->getDateCommande());
		$q->bindValue(":dateReception", $obj->getDateReception());
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}
	public static function delete(Commandes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Commandes WHERE idCommande=" .$obj->getIdCommande());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Commandes WHERE idCommande =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Commandes($results);
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
		$q = $db->query("SELECT * FROM Commandes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Commandes($donnees);
			}
		}
		return $liste;
	}

	public static function getListByProduit(produits $produits)
	{
		$id=(int) $produits->getIdProduit();
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Commandes WHERE idProduit=$id");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Commandes($donnees);
			}
		}
		return $liste;
	}
}