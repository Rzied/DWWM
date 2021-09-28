<?php

 Class Region {
	/***************************************** Attributs **********************************************/

	private $_idRegion ;
	private $_libelleRegion ;

	/***************************************** Accesseurs **********************************************/
	
	public function getIdRegion()
	{
		return $this->_idRegion;
	}

	public function setIdRegion($idRegion)
	{
		$this->_idRegion = $idRegion;
	}
	public function getLibelleRegion()
	{
		return $this->_libelleRegion;
	}

	public function setLibelleRegion($libelleRegion)
	{
		$this->_libelleRegion = $libelleRegion;
	}

	/***************************************** Constructeur **********************************************/

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
			$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/***************************************** Methode **********************************************/

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString(){
		return " idRegion : ".$this->getIdRegion()	." libelleRegion : ".$this->getLibelleRegion()	;
	}


}