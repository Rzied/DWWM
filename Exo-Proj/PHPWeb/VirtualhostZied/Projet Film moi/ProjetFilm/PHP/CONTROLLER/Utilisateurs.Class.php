<?php
class Utilisateurs
{

    /*****************Attributs***************** */
    private $_idUtilisateur;
    private $_nomUtilisateur;
    private $_prenomUtilisateur;
    private $_passUtilisateur;
    private $_mail;
    private $_roleUser;
    private $_pseudo;

    /*****************Accesseurs***************** */
    public function getIdUtilisateur()
    {
        return $this->_idUtilisateur;
    }

    public function setIdUtilisateur(int $idUtilisateur)
    {
        $this->_idUtilisateur = $idUtilisateur;
    }

    public function getNomUtilisateur()
    {
        return $this->_nomUtilisateur;
    }

    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->_nomUtilisateur = $nomUtilisateur;
    }

    public function getPrenomUtilisateur()
    {
        return $this->_prenomUtilisateur;
    }

    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->_prenomUtilisateur = $prenomUtilisateur;
    }

    public function getPassUtilisateur()
    {
        return $this->_passUtilisateur;
    }

    public function setPassUtilisateur($passUtilisateur)
    {
        $this->_passUtilisateur = $passUtilisateur;
    }

    public function getMail()
    {
        return $this->_mail;
    }

    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

  
    public function getRoleUser()
    {
        return $this->_roleUser;
    }

    public function setRoleUser($roleUser)
    {
        $this->_roleUser = $roleUser;
    }

    public function getPseudo()
    {
        return $this->_pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->_pseudo = $pseudo;
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
        return "\nNom : ".$this->getIdUtilisateur()."\nPrenom: ".$this->getPrenomUtilisateur()."\nPassword: ".$this->getPassUtilisateur()."\nMail: ".$this->getMail()."\nRole: ".$this->getRoleUser()."\nPseudo: ".$this->getPseudo();
    }



}
