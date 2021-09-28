<?php
class Agence
{

    /*****************Attributs***************** */
    private $_nomAgence;
    private $_adress;
    private $_codePostal;
    private $_ville;
    private $_restaurant;

    /*****************Accesseurs***************** */

    public function getNomAgence()
    {
        return $this->_nomAgence;
    }

    public function setNomAgence($nomAgence)
    {
        $this->_nomAgence = $nomAgence;
    }

    public function getAdress()
    {
        return $this->_adress;
    }

    public function setAdress($adress)
    {
        $this->_adress = $adress;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }
    public function getRestaurant()
    {
        return $this->_restaurant;
    }

    public function setRestaurant($restaurant)
    {
        $this->_restaurant = $restaurant;
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
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
        return "Nom d'agence :" . $this->getNomAgence() . "\nAdresse :" . $this->getAdress() . "\nCode Postale :" . $this->getCodePostal() . "\nVille :" . $this->getVille() . "\nRestauration :" . $this->getRestaurant() . ". " . $this->ticketsRes();
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

    public function ticketsRes()
    {
        if ($this->getRestaurant() == "NON") {
            return "Dispose de tickets restaurants.";
        }
    }
}
