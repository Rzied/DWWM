<?php

class SuiviManager
{
    public static function add(Suivi $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Suivi (idEleve, idMatiere, note, coefficient) VALUES (:idEleve, :idMatiere, :note,:coefficient)");
        $q->bindValue(":idEleve", $obj->getIdEleve());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":note", $obj->getNote());
        $q->bindValue(":coefficient", $obj->getCoefficient());
        $q->execute();
    }

    public static function update(Suivi $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Suivi SET idSuivi=:idSuivi idEleve=:idEleve,idMatiere=:idMatiere,note=:note coefficient=:coefficient WHERE idSuivi=:idSuivi");
        $q->bindValue(":idSuivi", $obj->getIdSuivi());
        $q->bindValue(":idEleve", $obj->getIdEleve());
        $q->bindValue(":idMatiere", $obj->getIdMatiere());
        $q->bindValue(":note", $obj->getNote());
        $q->bindValue(":coefficient", $obj->getCoefficient());
        $q->execute();
    }
    public static function delete(Suivi $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Suivi WHERE idSuivi=" . $obj->getIdEleve());
    }
    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Suivi WHERE idSuivi =" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Suivi($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Suivi");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Suivi($donnees);
            }
        }
        return $liste;
    }

}
