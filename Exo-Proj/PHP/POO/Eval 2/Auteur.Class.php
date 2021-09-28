<?php
class Auteur
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_ddnais;
    private $_ddeces = null;

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

    public function getDdnais()
    {
        return $this->_ddnais;
    }

    public function setDdnais(DateTime $ddnais)
    {
        $this->_ddnais = $ddnais;
    }

    public function getDdeces()
    {
        return $this->_ddeces;
    }

    public function setDdeces(DateTime $ddeces)
    {
        $this->_ddeces = $ddeces;
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
        $aff= "**** AUTEUR ****\nNom : " . $this->getNom() . "\nPrenom : " . $this->getPrenom() . "\nDate de naissance : " . $this->getDdnais()->format("d,m,Y") ;
        if ($this->estVivant()) {
            $aff .= "\nDate de deces : " . $this->getDdeces()->format("d,m,Y");

        } else { $aff .= "\nEncore Vivant(e)";}
        return $aff;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo(auteur $obj)
    {
        return ($this->getNom() == $obj->getNom() && $this->getPrenom() == $obj->getPrenom() && $this->getDdnais() == $obj->getDdnais() && $this->getDdeces() == $obj->getDdeces());
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

    //renvoi un boolean pour verifier si vivant ou pas
    public function estVivant()
    {
        return $this->getDdeces() ? true : false;
    }
}
