<?php

class Rectangle
{
    //Attributs
    private $_largeur;
    private $_longueur;


    // assesseurs
    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($lar)
    {
        $this->_largeur = $lar;
    }

    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($lon)
    {
        $this->_longueur = $lon;
    }

    //constructeur
 // **********       Version Manuel     **********
    // public function __construct($lar, $lon)
    // {
    //     $this->setLargeur($lar);
    //     $this->setLongueur($lon);
    // }

    // **********       Version Moderne     **********
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
    //autres méthodes
    public function perimetre()
    {
        return 2*($this->getLargeur()+$this->getLongueur());
    }

    public function aire()
    {
        return "L'aire est : ".$this->getLargeur()*$this->getLongueur()."\n";
    }

    public function EstCarre()
    {
        return ($this->getLargeur()==$this->getLongueur()) ? "C'est un carré":"C'est un rectangle\n";
    }

    public function AfficherRectangle()
    {
        return "Longueur : ".$this->getLongueur()." - Largeur : ".$this->getLargeur()." - Périmètre : ".$this->perimetre()." - ".$this->aire()." - ".$this->EstCarre();
    } 


}

$r= new Rectangle(["Largeur"=>10,"Longueur"=>5]);
// var_dump($r);
echo $r->aire();
echo $r->EstCarre();
echo $r->AfficherRectangle();