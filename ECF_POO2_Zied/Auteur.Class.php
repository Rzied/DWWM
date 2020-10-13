<?php
class Auteur
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dNais;
    private $_dDeces = null;

    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDNais()
    {
        return $this->_dNais;
    }

    public function setDNais(DateTime $dNais)
    {
        $this->_dNais = $dNais;
    }

    public function getDDeces()
    {
        return $this->_dDeces;
    }

    public function setDDeces(DateTime $dDeces)
    {
        $this->_dDeces = $dDeces;
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
        $aff = "\nPour cet auteur :\nNom : " . $this->getNom() . "\nPrenom : " . $this->getPrenom() . "\nDate de naissance : " . $this->getDNais()->format("d,m,Y");
        if ($this->estVivant()) {
            $aff .= "\nDate de deces : " . $this->getDDeces()->format("d,m,Y");

        } else { $aff .= "\n Encore Vivant(e)";}
        return $aff;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo(Auteur $obj)
    {
        return ($this->getNom() == $obj->getNom() && $this->getPrenom() == $obj->getPrenom() && $this->getDNais() == $obj->getDNais() && $this->getDDeces() == $obj->getDDeces());
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
    public function estVivant()
    {
        return $this->getDDeces() ? true : false;
    }

}
