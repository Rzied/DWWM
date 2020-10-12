<?php
class Joueur extends De
{

    /*****************Attributs***************** */
    private $_estVivant;
    private $_compteur = 50;

    /*****************Accesseurs***************** */

    public function getCompteur()
    {
        return $this->_compteur;
    }

    public function setCompteur($compteur)
    {
        $this->_compteur = $compteur;
    }

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
        return "";
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

    public function SubitDegats(int $degat)
    {
        if ($this->Bouclier() == false);
        {
            $compteur = $this->getCompteur() - $degat;
            
        }
        return $compteur;
    }
    public function Bouclier()
    {
        return $this->LanceLeDe() ? true : false;
    }
    public function Attaque(MonstreFacile $monstre)
    {
        $hero = $this->LanceLeDe();
        $monstre = $this->LanceLeDe();
        if ($hero < $monstre) {
            $monstre = $this->LanceLeDe();
            $choix = rand(1, 2);
            if ($choix == 1) {
                echo "C'est un Monstre facile : ";

                if (!$this->Bouclier()) {
                    $this->SubitDegats(10);
                }
            } else {
                echo "C'est un Monstre difficile : ";
                $monstre = $this->LanceLeDe();
                if ($monstre > $hero) {
                    if (!$this->Bouclier()) {
                        $this->SubitDegats(10);
                    }
                }
                $monstre = $this->LanceLeDe(); //pour le sort magique
                if ($monstre != 6) {
                    if (!$this->Bouclier()) {
                        $this->SubitDegats($monstre * 5);
                    }
                }

            }
        }

        return;
    }
}
