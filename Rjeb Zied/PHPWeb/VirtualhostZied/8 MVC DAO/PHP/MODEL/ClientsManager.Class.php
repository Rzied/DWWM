<?php
class ClientsManager
{
    public static function add(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("INSERT INTO Clients (nomClient,prenomClient,dateDeNaissance) VALUES (:nomClient,:prenomClient,:dateDeNaissance)");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":dateDeNaissance", $obj->getDateDeNaissance());
        $q->execute();
    }
    public static function update(Clients $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Clients SET nomClient=:nomClient,prenomClient=:prenomClient,dateDeNaissance=:dateDeNaissance WHERE idClient=:idClient");
        $q->bindValue(":nomClient", $obj->getNomClient());
        $q->bindValue(":prenomClient", $obj->getPrenomClient());
        $q->bindValue(":dateDeNaissance", $obj->getDateDeNaissance());
        $q->bindValue(":idClient", $obj->getIdClient());
        $q->execute();
    }

    public static function delete(Clients $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Clients WHERE idClient=" . $obj->getIdClient());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id; // on verifie que id est numerique, evite l'injection SQL
        $q = $db->query("SELECT * FROM Clients WHERE idClient=" . $id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false) {
            return new Clients($results);
        } else {
            return false;
        }
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste = [];
        $q = $db->query("SELECT * FROM Clients");
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            if ($donnees != false) {
                $liste[] = new Produits($donnees);
            }
        }
        return $liste; // tableau contenant les objets Produits
    }

}
