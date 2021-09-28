<?php

class Lieuxdestockages 
{

	/*****************Attributs***************** */

	private $_idLieuxDeStockage;
	private $_libelleLieuxDeStockage;
	private $_Rayon;
	private $_Etagere;

	/***************** Accesseurs ***************** */


	public function getIdLieuxDeStockage()
	{
		return $this->_idLieuxDeStockage;
	}

	public function setIdLieuxDeStockage(int $idLieuxDeStockage)
	{
		$this->_idLieuxDeStockage=$idLieuxDeStockage;
	}

	public function getLibelleLieuxDeStockage()
	{
		return $this->_libelleLieuxDeStockage;
	}

	public function setLibelleLieuxDeStockage($libelleLieuxDeStockage)
	{
		$this->_libelleLieuxDeStockage=$libelleLieuxDeStockage;
	}

	public function getRayon()
	{
		return $this->_Rayon;
	}

	public function setRayon($Rayon)
	{
		$this->_Rayon=$Rayon;
	}

	public function getEtagere()
	{
		return $this->_Etagere;
	}

	public function setEtagere(int $Etagere)
	{
		$this->_Etagere=$Etagere;
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
		return "IdLieuxDeStockage : ".$this->getIdLieuxDeStockage()."LibelleLieuxDeStockage : ".$this->getLibelleLieuxDeStockage()."Rayon : ".$this->getRayon()."Etagere : ".$this->getEtagere()."\n";
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