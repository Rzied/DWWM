<?php
class Document
{

    /*****************Attributs***************** */
    private $_auteur;
    private $_titre;
    private $_emprunte;

    /*****************Accesseurs***************** */
    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur($auteur)
    {
        $this->_auteur = $auteur;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function getEmprunte()
    {
        return $this->_emprunte;
    }

    public function setEmprunte(bool $b)
    {
        $this->_emprunte = $b;
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
        // return "**** Document ****\nAuteur : ".$this->getAuteur()."\nTitre : ".$this->getTitre()."\nEst Emprunte ? ".$this->EstEmprunte()."\n";
        return "**** Document ****\nAuteur : " . $this->getAuteur()->toString() . "\nTitre : " . $this->getTitre() . "\nEst Emprunte ? " . $this->EstEmprunte() . "\n";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo(document $obj)
    {
        // return ($this->getAuteur() == $obj->getAuteur() && $this->getTitre() == $obj->getTitre());
        return ($this->getAuteur()->equalsTo($obj->getAuteur()) && $this->getTitre() == $obj->getTitre());
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
    public static function compareTo(document $obj1, document $obj2)            //
    {
        if ($obj1->getTitre() < $obj2->getTitre()) {
            return -1;
        } elseif ($obj1->getTitre() > $obj2->getTitre()) {
            return 1;
        } else {
            return 0;
        }
    }
    public function EstEmprunte()
    {
        // return $this-getEmprunte()? true:false;          ce que j'ai fais
        return $this->getEmprunte() ? "OUI" : "NON";
    }

}
