<?php

class DepartementManager
{
	  
	static public function add(Departement $dep)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�paration de la requ�te d'insertion.
		$q = $db->prepare('INSERT INTO departements (libelleDepartement, idRegion) VALUES(:libelleDepartement, :idRegion)');
		
		// Assignation des valeurs pour le nom, le pr�nom.
		$q->bindValue(':libelleDepartement', $dep->getLibelleDepartement());
		$q->bindValue(':idRegion', $dep->getIdRegion());
		
		// Ex�cution de la requ�te.
		$q->execute();
		
	}
	
	static public function delete(Departement $dep)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type DELETE.
		$db->exec('DELETE FROM departements WHERE idDepartement = '.$dep->getIdDepartement());
	}
	/**
	 * Si API = True on renvoi un tableau asociatif
	 * sinon on renvoi un tableau de Departements
	 */
	static public function getById($id,$api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Ex�cute une requ�te de type SELECT avec une clause WHERE, et retourne un objet Departement.
		$id = (int) $id;
		$q = $db->query ('SELECT idDepartement, libelleDepartement, idRegion FROM departements WHERE idDepartement = '.$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		if ($api)  return $donnees;
		return new Departement($donnees);
	}
	/**
	 * Si API = True on renvoi un tableau asociatif
	 * sinon on renvoi un tableau de Departements
	 */
	static public function getList($api)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les Departements.
		
		$q = $db->query('SELECT idDepartement, libelleDepartement, idRegion FROM departements ORDER BY libelleDepartement');
		
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$deps[] = new Departement($donnees);
			$json[]=$donnees;
		}
		if (!$api)  return $deps;
		return $json;
	}
	
	
	static public function update(Departement $dep)
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Pr�pare une requ�te de type UPDATE.
		$q = $db->prepare('UPDATE departements SET libelleDepartement=:libelleDepartement, idRegion=:idRegion WHERE idDepartement = :id');
		
		// Assignation des valeurs � la requ�te.
		$q->bindValue(':libelleDepartement', $dep->getLibelleDepartement());
		$q->bindValue(':idRegion', $dep->getIdRegion());
		
		// Ex�cution de la requ�te.
		$q->execute();
	}
	
	static public function count()
	{
		$db = DbConnect::getDb(); // Instance de PDO.
		// Retourne la liste de tous les Departements.
		
		$q = $db->query('SELECT count(*) as nb FROM departements');
		
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return $donnees;
	}
	public static function getListByRegion($idRegion, $api){
        $id=(int) $idRegion;
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM departements where idRegion=$id");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
				$liste[] = new Departements($donnees);
				$json[]=$donnees;
            }
        }
		if (!$api)  return $liste;
		return $json;
    }
}