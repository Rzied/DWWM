<?php
class Livret extends Compte
{

    /*****************Attributs***************** */

    /*****************Accesseurs***************** */

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        parent::__construct($options);
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
        return "et" . parent::toString();
    }

    public function appliqueInteret()
    {
        $r = parent::getMontant() + (parent::getMontant() / 100) * 5;
        return " et " . $r . "€ sur son compte " . parent::getNumero();
    }
}
