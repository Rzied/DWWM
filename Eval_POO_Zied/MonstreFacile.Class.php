<?php
class MonstreFacile extends De
{

    /*****************Attributs***************** */
    private $_estVivant = true;

    /*****************Accesseurs***************** */
    public function getEstVivant()
    {
        return $this->_estVivant;
    }

    public function setEstVivant($estVivant)
    {
        $this->_estVivant = $estVivant;
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
        return " ";
    }

    public function Attaque(Joueur $hero)
    {
        $hero = $this->LanceLeDe();
        $monstre = $this->LanceLeDe();
        if ($monstre <= $hero) {
            $estVivant = false;
        }
        return $estVivant;
    }
    public function FunctionName()
    {

    }
}
