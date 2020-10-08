<?php


class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_genre;
    private $_voiture;
    //Constructeur
    public function __construct($n, $p, $a, $g, Voiture $v)
    {
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setAge($a);
        $this->setGenre($g);
        $this->setVoiture($v);
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

    public function getAge()
    {
        return $this->_age;
    }
    public function getGenre()
    {
        return $this->_genre;
    }
    public function getVoiture()
    {
        return $this->_voiture;
    }

    //SETTER

    public function setNom($n)
    {
        $this->_nom = strtoupper($n);
    }
    public function setPrenom($p)
    {
        $this->_prenom = ucfirst($p);
    }
    public function setAge($a)
    {
        $this->_age = $a;
    }
    public function setGenre($g)
    {
        $this->_genre = $g;
    }
    public function setVoiture(Voiture $v)
    {
        $this->_voiture = $v;
    }

    //autre methode

    public function toString()
    {
        $reponse = "La personner s'appelle $this->_Nom $this->_Prenom , a $this->_Age et de Genre $this->_Genre.\n";
    }

    public function equalTo(Personne $obj)
    {
        if ($this->getGenre() == $obj->getGenre() && $this->getAge() == $obj->getAge()) {
            return true;
        }
        return false;
    }
    public function compareTo(Personne $obj)
    {
        if ($this->getNom() > $obj->getNom()) {
            return 1;
        } else if ($this->getNom() < $obj->getNom()) {
            return -1;
        } else    // égalité sur les noms
        {
            if ($this->getPrenom() > $obj->getPrenom()) {
                return 1;
            } else if ($this->getPrenom() < $obj->getPrenom()) {
                return -1;
            } else {   // égalité sur les personnes
                return 0;
            }
        }
    }
}

// $p1 = new Personne("Rjeb", "Zied", 29, "Male",$v);
// var_dump($p1);
// echo $p1->getPrenom();
