<?php

class ProduitsManager 
{
	public static function add(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO produits (NomProduit, CouleurProduit, PoidsProduit) VALUES (:nomProduit, :couleurProduit, :poidsProduit)");
		$q->bindValue(":nomProduit", $obj->getNomProduit());
		$q->bindValue(":couleurProduit", $obj->getCouleurProduit());
		$q->bindValue(":poidsProduit", $obj->getPoidsProduit());
		$q->execute();
	}

	public static function update(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE produits SET idProduit=:idProduit,nomProduit=:nomProduit,couleurProduit=:couleurProduit,poidsProduit=:poidsProduit WHERE idProduit=:idProduit");
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":nomProduit", $obj->getNomProduit());
		$q->bindValue(":couleurProduit", $obj->getCouleurProduit());
		$q->bindValue(":poidsProduit", $obj->getPoidsProduit());
		$q->execute();
	}
	public static function delete(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Produits WHERE idProduit=" .$obj->getIdProduit());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM produits WHERE idProduit =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Produits($results);
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
		$q = $db->query("SELECT * FROM produits");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Produits($donnees);
			}
		}
		return $liste;
	}

	public static function getListByCategorie(Categories $idCat)
	{
		$idCat= (int) $idCat->getIdCategorie();
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM produits Where idCategorie=$idCat");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Produits($donnees);
			}
		}
		return $liste;
	}
}