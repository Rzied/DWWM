<?php

class ProduitsManager 
{
	public static function add(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO produits (nomProduit,descriptionProduit,restrictionProduit,datePeremptionProduit,prixProduit,QuantiteProduit,idCategorie,idLieuxDeStockage) VALUES (:nomProduit,:descriptionProduit,:restrictionProduit,:datePeremptionProduit,:prixProduit,:QuantiteProduit,:idCategorie,:idLieuxDeStockage)");
		$q->bindValue(":nomProduit", $obj->getNomProduit());
		$q->bindValue(":descriptionProduit", $obj->getDescriptionProduit());
		$q->bindValue(":restrictionProduit", $obj->getRestrictionProduit());
		$q->bindValue(":datePeremptionProduit", $obj->getDatePeremptionProduit());
		$q->bindValue(":prixProduit", $obj->getPrixProduit());
		$q->bindValue(":QuantiteProduit", $obj->getQuantiteProduit());
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->bindValue(":idLieuxDeStockage", $obj->getIdLieuxDeStockage());
		$q->execute();
	}

	public static function update(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE produits SET idProduit=:idProduit,nomProduit=:nomProduit,descriptionProduit=:descriptionProduit,restrictionProduit=:restrictionProduit,datePeremptionProduit=:datePeremptionProduit,prixProduit=:prixProduit,QuantiteProduit=:QuantiteProduit,idCategorie=:idCategorie,idLieuxDeStockage=:idLieuxDeStockage WHERE idProduit=:idProduit");
		$q->bindValue(":idProduit", $obj->getIdProduit());
		$q->bindValue(":nomProduit", $obj->getNomProduit());
		$q->bindValue(":descriptionProduit", $obj->getDescriptionProduit());
		$q->bindValue(":restrictionProduit", $obj->getRestrictionProduit());
		$q->bindValue(":datePeremptionProduit", $obj->getDatePeremptionProduit());
		$q->bindValue(":prixProduit", $obj->getPrixProduit());
		$q->bindValue(":QuantiteProduit", $obj->getQuantiteProduit());
		$q->bindValue(":idCategorie", $obj->getIdCategorie());
		$q->bindValue(":idLieuxDeStockage", $obj->getIdLieuxDeStockage());
		$q->execute();
	}
	public static function delete(Produits $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM produits WHERE idProduit=" .$obj->getIdProduit());
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