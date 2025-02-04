<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (nomUtilisateur,prenomUtilisateur,emailUtilisateur,mdpUtilisateur,datePeremption,idRole) VALUES (:nomUtilisateur,:prenomUtilisateur,:emailUtilisateur,:mdpUtilisateur,:datePeremption,:idRole)");
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
		$q->bindValue(":mdpUtilisateur", $obj->getMdpUtilisateur());
		$q->bindValue(":datePeremption", $obj->getDatePeremption());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateurs SET idUtilisateur=:idUtilisateur,nomUtilisateur=:nomUtilisateur,prenomUtilisateur=:prenomUtilisateur,emailUtilisateur=:emailUtilisateur,mdpUtilisateur=:mdpUtilisateur,datePeremption=:datePeremption,idRole=:idRole WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":emailUtilisateur", $obj->getEmailUtilisateur());
		$q->bindValue(":mdpUtilisateur", $obj->getMdpUtilisateur());
		$q->bindValue(":datePeremption", $obj->getDatePeremption());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
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
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}
	public static function getByEmail($email)
	{
 		$db=DbConnect::getDb();
		$q=$db->query('SELECT * FROM Utilisateurs WHERE emailUtilisateur ="'.$email.'"');
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
	}
}