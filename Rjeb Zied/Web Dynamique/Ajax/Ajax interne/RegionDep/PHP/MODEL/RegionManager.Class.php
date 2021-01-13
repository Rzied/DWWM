<?php

class RegionManager
{
	  
	static public function add(Region $region)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO regions (libelleRegion) VALUES(:libelleRegion)');
		
		// Assignation des valeurs pour le nom, le pr�nom.
		$q->bindValue(':libelleRegion', $region->libelleRegion());
		// Ex�cution de la requ�te.
		$q->execute();
		
	}
	
	static public function delete(Region $region)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type DELETE.
		$db->exec('DELETE FROM regions WHERE idRegion = '.$region->getIdRegion());
	}
	
	static public function getById($id,$api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Region.
		$id = (int) $id;
		
		$q = $db->query('SELECT idRegion, libelleRegion FROM regions WHERE idRegion = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        if ($api)  return $donnees;
		return new Region($donnees);
	}
	
	static public function getList($api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les region.
		
		$q = $db->query('SELECT idRegion, libelleRegion FROM regions ORDER BY libelleRegion');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
            $reg[] = new Region($donnees);
            $json[]=$donnees;
		}
        if (!$api)  return $reg;
        return $json;
	}
	
	
	static public function update(Region $region)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE regions SET idRegion=:idRegion, libelleRegion=:libelleRegion  WHERE idRegion = :idRegion');
		
		// Assignation des valeurs � la requ�te.
		$q->bindValue(':libelleRegion', $region->getLibelleRegion());
		$q->bindValue(':idRegion', $region->getIdRegion());
		// Ex�cution de la requ�te.
		$q->execute();
	}
	
	static public function count()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les region.
		
		$q = $db->query('SELECT count(*) as nb FROM regions');
		
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return $donnees;
	}

	
}