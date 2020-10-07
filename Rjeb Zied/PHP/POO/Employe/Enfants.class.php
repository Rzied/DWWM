<?php
class Enfants
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_age;

    /*****************Accesseurs***************** */
    public function getNom()
    {

        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age = $age;
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
        return "Nom d'enfant :" . $this->getNom() . "\nPrenom d'enfant :" . $this->getPrenom() . "\nAge :" . $this->getAge() . "\nCheque Noel:" . $this->chNoel() . "\n";
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
    public function chNoel()
    {
        $a = $this->getAge();
        switch ($a) {
            case ($a > 0 && $a < 11):
                return " Cheque de 20 euros ";
                break;
            case ($a > 10 && $a < 16):
                return " Cheque de 30 euros ";
                break;
            case ($a > 15 && $a < 19):
                return " Cheque de 50 euros ";
                break;
            default:
                return " DSL, Pas de cheque ";
                break;
        }
    }
}
