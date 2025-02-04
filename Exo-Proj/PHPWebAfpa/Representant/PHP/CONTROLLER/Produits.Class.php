<?php
class Produits
{

    /*****************Attributs***************** */
    private $_idProduit;
    private $_nomProduit;
    private $_couleurProduit;
    private $_poidsProduit;

    /*****************Accesseurs***************** */
    public function getIdProduit()
    {
        return $this->_idProduit;
    }

    public function setIdProduit($idProduit)
    {
        $this->_idProduit = $idProduit;
    }

    public function getNomProduit()
    {
        return $this->_nomProduit;
    }

    public function setNomProduit($nomProduit)
    {
        $this->_nomProduit = $nomProduit;
    }

    public function getCouleurProduit()
    {
        return $this->_couleurProduit;
    }

    public function setCouleurProduit($couleurProduit)
    {
        $this->_couleurProduit = $couleurProduit;
    }

    public function getPoidsProduit()
    {
        return $this->_poidsProduit;
    }

    public function setPoidsProduit($poidsProduit)
    {
        $this->_poidsProduit = $poidsProduit;
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
        foreach ($data as $key => $value)
        {
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
        return "IdProduit: ".$this->getIdProduit()."Nomp Produit: ".$this->getNomProduit()."Couleur Produit: ".$this->getCouleurProduit()."Poids Produit: ".$this->getPoidsProduit();
    }

 

    
}