<?php

class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaireAnnuel;
    private $_service;
    private static $_compteur = 0;

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
    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getSalaireAnnuel()
    {
        return $this->_salaireAnnuel;
    }

    public function setSalaireAnnuel($salaireAnnuel)
    {
        $this->_salaireAnnuel = $salaireAnnuel;
    }

    public function getFonction()
    {
        return $this->_fonction;
    }

    public function setFonction($fonction)
    {
        $this->_fonction = $fonction;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }
    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }


    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
        self::$_compteur++;
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
        echo "\n";
        return "\nLe nom:" . $this->getNom() . "\nLe prenom:" . $this->getPrenom() . "\nDate d'embauche: " . $this->getDateEmbauche()->format("d,m,y") . "\nFonction: " . $this->getFonction() . "\nSalaire Annuel: " . $this->getSalaireAnnuel() . "K" . "\nService: " . $this->getService() . "\n";
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
    public static function compareToNomPrenom($obj1, $obj2)
    {
        if ($obj1->getNom() < $obj2->getNom()) {
            return -1;
        } else if ($obj1->getNom() > $obj2->getNom()) {
            return 1;
        } else if ($obj1->getPrenom() < $obj2->getPrenom()) {
            return -1;
        } else if ($obj1->getPrenom() > $obj2->getPrenom()) {
            return 1;
        }

        return 0;
    }
    /**
     * Compare 2 objets sur le nom et le prénom
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareToServiceNomPrenom($obj1, $obj2)
    {
        if ($obj1->getService() < $obj2->getService()) {
            return -1;
        } else if ($obj1->getService() > $obj2->getService()) {
            return 1;
        } else {
            return self::compareToNomPrenom($obj1, $obj2);
        }
    }

    public function Anciennete()
    {
        $date = $this->getDateEmbauche();
        $date1 = new DateTime("now");
        $diff = $date1->diff($date);
        $diff->format('%y');
        $anne = $diff->format("%y") * 1;
        return $anne;
    }

    private function primeSalair()
    {

        $prime = ((($this->getSalaireAnnuel() * 1000) / 100) * 5);
        return $prime;
    }
    private function primeAnciennete()
    {

        $prime = ((($this->getSalaireAnnuel() * 1000) / 100) * 2);
        return $prime;
    }
    private function prime()
    {
        return $this->primeSalair() + $this->primeAnciennete();
    }
    /**
     * Renvoi la masse salariale de l'employé
     *
     * @return void
     */
    public function masseSalariale()
    {
        return $this->getSalaireAnnuel()*1000+ $this->prime();
    }
}
