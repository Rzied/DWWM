<?php

class UtilisateursManager
{
    public static function add(Utilisateurs $obj)
	{
        $db=DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Utilisateurs(nomUtilisateur, prenomUtilisateur,passUtilisateur,mail,roleUser,pseudo) VALUES (:nomUtilisateur,:prenomUtilisateur,:passUtilisateur,:mail,:roleUser,:pseudo)");
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":passUtilisateur", $obj->getPassUtilisateur());
        $q->bindValue(":mail", $obj->getMail());
        $q->bindValue(":roleUser", $obj->getRoleUser());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }

    public static function update(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Utilisateurs SET nomUtilisateur=:nomUtilisateur, prenomUtilisateur=:prenomUtilisateur, passUtilisateur=:passUtilisateur, mail=:mail ,roleUser=:roleUser,pseudo=:pseudo WHERE idUtilisateur=:idUtilisateur");
        $q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
        $q->bindValue(":nomUtilisateur", $obj->getNomUtilisateur());
        $q->bindValue(":prenomUtilisateur", $obj->getPrenomUtilisateur());
        $q->bindValue(":passUtilisateur", $obj->getPassUtilisateur());
        $q->bindValue(":mail", $obj->getMail());
        $q->bindValue(":roleUser", $obj->getRoleUser());
        $q->bindValue(":pseudo", $obj->getPseudo());
        $q->execute();
    }

    public static function delete(Utilisateurs $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" . $obj->getidUtilisateur());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;  // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Utilisateurs($results);
        }
        else
        {
            return false;
        }
    }
   
    public static function findByPseudo($pseudo)
    {
		$db = DbConnect::getDb();
		var_dump($pseudo);
        if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
            $q = $db->query("SELECT * FROM Utilisateurs WHERE pseudo ='" . $pseudo . "'");
            $results = $q->fetch(PDO::FETCH_ASSOC);
            if ($results != false)
            {
                return new Utilisateurs($results);
            }
            else
            {
                return false;
            }}
        else
        {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Utilisateurs");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Utilisateurs($donnees);
            }
        }
        return $liste;  // tableau contenant les objets Acteurs
    }

}