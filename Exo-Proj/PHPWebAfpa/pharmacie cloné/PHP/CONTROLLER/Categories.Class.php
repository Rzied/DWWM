<?php

class Categories 
{

	/*****************Attributs***************** */

	private $_idCategorie;
	private $_nomCategorie;
	private $_ordonnanceCategorie;

	/***************** Accesseurs ***************** */


	public function getIdCategorie()
	{
		return $this->_idCategorie;
	}

	public function setIdCategorie(int $idCategorie)
	{
		$this->_idCategorie=$idCategorie;
	}

	public function getNomCategorie()
	{
		return $this->_nomCategorie;
	}

	public function setNomCategorie($nomCategorie)
	{
		$this->_nomCategorie=$nomCategorie;
	}

	public function getOrdonnanceCategorie()
	{
		return $this->_ordonnanceCategorie;
	}

	public function setOrdonnanceCategorie($ordonnanceCategorie)
	{
		$this->_ordonnanceCategorie=$ordonnanceCategorie;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdCategorie : ".$this->getIdCategorie()."NomCategorie : ".$this->getNomCategorie()."OrdonnanceCategorie : ".$this->getOrdonnanceCategorie()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}