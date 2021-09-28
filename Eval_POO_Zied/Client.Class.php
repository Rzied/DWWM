<?php
class Client
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_compte;
    private $_livret;
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

    public function getCompte()
    {
        return $this->_compte;
    }

    public function setCompte(Compte $compte)
    {
        $this->_compte = $compte;
    }

    public function getLivret()
    {
        return $this->_livret;
    }

    public function setLivret(Livret $livret)
    {
        $this->_livret = $livret;
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
        return "\n Le Client " . $this->getNom() . "  " . $this->getPrenom() . " " . $this->getCompte()->toString() . " ".$this->getLivret()->toString();
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

    public function Recevoir($montant)
    {
        $nMontant = $this->getCompte() + $montant;
        return $nMontant;
    }
    public function Deponser($montant)
    {
        $nMontant = $this->getCompte() - $montant;
        return $nMontant;
    }
    public function Epargner($montant)
    {
        $nMontant = $this->getCompte() - $montant;
        $tab[0] = $nMontant;
        $tab[1] = $this->getLivret() + $montant;
        return $tab;
    }

}
