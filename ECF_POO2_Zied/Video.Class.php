<?php

 Class Video {
	/***************************************** Attributs **********************************************/

	private $_titre ;
	private $_auteur ;
	private $_soustitre ;

	/***************************************** Accesseurs **********************************************/
	
	public function getTitre()
	{
		return $this->_titre;
	}

	public function setTitre($titre)
	{
		$this->_titre = $titre;
	}
	public function getAuteur()
	{
		return $this->_auteur;
	}

	public function setAuteur($auteur)
	{
		$this->_auteur = $auteur;
	}
	public function getSoustitre()
	{
		return $this->_soustitre;
	}

	public function setSoustitre($soustitre)
	{
		$this->_soustitre = $soustitre;
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
		
		return "\nTitre : " . $this->getTitre() . "\nAuteur : " . $this->getAuteur()->toString() . "\nSous-titre : ".$this->getSoustitre();
	}

	/**
	* Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
	*
	* @param [type] obj
	* @return bool
	*/
	public function equalsTo(){
		return  "";
	}

	/**
	* Compare 2 objets
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*        -1 si le 1er est <
	*
	* @param [type] obj1
	* @param [type] obj2
	* @return void
	*/
	public function compareTo(){
		return "";
	}

}