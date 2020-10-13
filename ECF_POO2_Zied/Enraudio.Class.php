<?php

 Class Enraudio extends Auteur {
	/***************************************** Attributs **********************************************/

	private $_titre ;
	private $_duree ;
	private $_auteur ;

	/***************************************** Accesseurs **********************************************/
	
	public function getTitre()
	{
		return $this->_titre;
	}

	public function setTitre($titre)
	{
		$this->_titre = $titre;
	}
	public function getDuree()
	{
		return $this->_duree;
	}

	public function setDuree($duree)
	{
		$this->_duree = $duree;
	}
	public function getAuteur()
	{
		return $this->_auteur;
	}

	public function setAuteur($auteur)
	{
		$this->_auteur = $auteur;
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
		
		return "\nTitre : " . $this->getTitre()."\nDuree : ".$this->getDuree() . "\nAuteur : " . $this->getAuteur()->toString() ;
	}


}