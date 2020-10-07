<?php
function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");
class Produit
{

    /*****************Attributs***************** */
    private $_num;
    private $_designation;
    private $_couleur;
    private $_dlc;
    private $_categorie;
    private $_lieuStockage;
    private $_prixHT;
    private static $_compteur = 0;

    /*****************Accesseurs***************** */
    public function getNum()
    {
        return $this->_num;
    }

    public function setNum($num)
    {
        $this->_num = $num;
    }

    public function getDesignation()
    {
        return $this->_designation;
    }

    public function setDesignation($designation)
    {
        $this->_designation = $designation;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;
    }

    public function getDlc()
    {
        return $this->_dlc;
    }

    public function setDlc($dlc)
    {
        $this->_dlc = $dlc;
    }

    public function getCategorie()
    {
        return $this->_categorie;
    }

    public function setCategorie(Categorie $categorie)
    {
        $this->_categorie = $categorie;
    }

    public function getLieuStockage()
    {
        return $this->_lieuStockage;
    }

    public function setLieuStockage(LieuDeStockage $lieuStockage)
    {
        $this->_lieuStockage = $lieuStockage;
    }

    public function getPrixHT()
    {
        return $this->_prixHT;
    }

    public function setPrixHT($prixHT)
    {
        $this->_prixHT = $prixHT;
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
        $aff="";
         $aff.="Numero: ".$this->getNum()."Designation: ".$this->getDesignation();
        $aff.="Couleur: ".$this->getCouleur()."DLC: ".$this->getDlc()."Categorie: ".$this->getCategorie();
        $aff.="\nLieu de Stockage: ".$this->getLieuStockage()."\nPrix HT: ".$this->getPrixHT();
        return $aff;
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

}
