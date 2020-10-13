<?php
class Document
{

    /*****************Attributs***************** */
    private $_auteur;
    private $_titre;
    private $_estEmprunte;
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

    public function setEmprunte($emprunte)
    {
        $this->_emprunte = $emprunte;
    }

    public function getEstEmprunte()
    {
        return $this->_estEmprunte;
    }

    public function setEstEmprunte($estEmprunte)
    {
        $this->_estEmprunte = $estEmprunte;
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
    { /* ****************************** AVANT LA MODIFICATION 3.5 ************************************* */
        // return "\nCe document:\nAuteur : ".$this->getAuteur()."\nTitre : ".$this->getTitre()."\nEst Emprente : ".$this->getEstEmprunte();

        /* ****************************** APRES LA MODIFICATION 3.5 ************************************* */
        $aff = "\nCe document:\nAuteur : " . $this->getAuteur()->toString() . "\nTitre : " . $this->getTitre() . "\nEst Emprente : " . $this->getEstEmprunte();
        return $aff;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo(document $o)
    {
        // return ($this->getAuteur()== $o->getAuteur() && $this->getTitre()==$o->getTitre());
        return ($this->getAuteur() == $o->getAuteur() && $this->getTitre() == $o->getTitre());
    }

}
