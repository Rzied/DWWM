<?php

class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;

    //constructeur
    public function __construct()
    {
    }

    //Assesseurs

    //GETTER
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }

    //SETTER

    public function setNom($n)
    {
        $this->_nom = $n;
    }
    public function setPrenom($p)
    {
        $this->_prenom = $p;
    }
}

$p1= new Personne();
var_dump($p1);
$p1-> setPrenom("Zied");
$p1-> setNom("Rjeb");
var_dump($p1);
echo $p1->getPrenom();