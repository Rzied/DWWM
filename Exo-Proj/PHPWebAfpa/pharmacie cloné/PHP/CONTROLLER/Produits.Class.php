<?php

class Produits 
{

	/*****************Attributs***************** */

	private $_idProduit;
	private $_nomProduit;
	private $_descriptionProduit;
	private $_restrictionProduit;
	private $_datePeremptionProduit;
	private $_prixProduit;
	private $_QuantiteProduit;
	private $_idCategorie;
	private $_idLieuxDeStockage;

	/***************** Accesseurs ***************** */


	public function getIdProduit()
	{
		return $this->_idProduit;
	}

	public function setIdProduit(int $idProduit)
	{
		$this->_idProduit=$idProduit;
	}

	public function getNomProduit()
	{
		return $this->_nomProduit;
	}

	public function setNomProduit($nomProduit)
	{
		$this->_nomProduit=$nomProduit;
	}

	public function getDescriptionProduit()
	{
		return $this->_descriptionProduit;
	}

	public function setDescriptionProduit($descriptionProduit)
	{
		$this->_descriptionProduit=$descriptionProduit;
	}

	public function getRestrictionProduit()
	{
		return $this->_restrictionProduit;
	}

	public function setRestrictionProduit($restrictionProduit)
	{
		$this->_restrictionProduit=$restrictionProduit;
	}

	public function getDatePeremptionProduit()
	{
		return $this->_datePeremptionProduit;
	}

	public function setDatePeremptionProduit($datePeremptionProduit)
	{
		$this->_datePeremptionProduit=$datePeremptionProduit;
	}

	public function getPrixProduit()
	{
		return $this->_prixProduit;
	}

	public function setPrixProduit(float $prixProduit)
	{
		$this->_prixProduit=$prixProduit;
	}

	public function getQuantiteProduit()
	{
		return $this->_QuantiteProduit;
	}

	public function setQuantiteProduit(int $QuantiteProduit)
	{
		$this->_QuantiteProduit=$QuantiteProduit;
	}

	public function getIdCategorie()
	{
		return $this->_idCategorie;
	}

	public function setIdCategorie(int $idCategorie)
	{
		$this->_idCategorie=$idCategorie;
	}

	public function getIdLieuxDeStockage()
	{
		return $this->_idLieuxDeStockage;
	}

	public function setIdLieuxDeStockage(int $idLieuxDeStockage)
	{
		$this->_idLieuxDeStockage=$idLieuxDeStockage;
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
		return "IdProduit : ".$this->getIdProduit()."NomProduit : ".$this->getNomProduit()."DescriptionProduit : ".$this->getDescriptionProduit()."RestrictionProduit : ".$this->getRestrictionProduit()."DatePeremptionProduit : ".$this->getDatePeremptionProduit()."PrixProduit : ".$this->getPrixProduit()."QuantiteProduit : ".$this->getQuantiteProduit()."IdCategorie : ".$this->getIdCategorie()."IdLieuxDeStockage : ".$this->getIdLieuxDeStockage()."\n";
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