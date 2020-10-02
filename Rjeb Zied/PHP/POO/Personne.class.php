<?php


class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_genre;

    //Constructeur
    public function __construct($n, $p, $a, $g)
    {
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setAge($a);
        $this->setGenre($g);
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

    //SETTER

    public function setNom($n)
    {
        $this->_nom = $n;
    }
    public function setPrenom($p)
    {
        $this->_prenom = $p;
    }
    public function setAge($a)
    {
        $this->_age = $a;
    }
    public function setGenre($g)
    {
        $this->_genre = $g;
    }

    //autre methode

    public function toString()
    {
        $reponse = "La personner s'appelle $this->_Nom $this->_Prenom , a $this->_Age et de Genre $this->_Genre.\n";
    }
    public function equalTo($obj)
    {
        if ($this->_genre==$obj->getGenre()&& $this->_age==$obj->getAge() ) {
            return true;
        }
        return false;
    }
    public function compareTo($obj)
    {
        if ($this->_genre>$obj->getGenre()) {
            return 1;
        }
        elseif ($this->_genre<$obj->etGenre()) {
            return -1;
        }
        else {
            return 0;
        }
    }
}

$p1 = new Personne("Rjeb", "Zied", 29,"Male");
var_dump($p1);
echo $p1->getPrenom();
