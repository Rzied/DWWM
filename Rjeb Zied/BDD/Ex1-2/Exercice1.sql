Ecrivez des requêtes SELECT (A chaquefois ,vous stockerez la requete dans un fichier texte» pour
a. Affichez la totalité de la table « client ».
SELECT `idClient`, `nomClient`, `prenomClient`, `dateEntreeClient` FROM `clients`;
b. Affichez les noms de tous les clients.
SELECT `nomClient` FROM `clients` ;
SELECT CONCAT(`nomClient`, " ", `prenomClient`) AS "Nom du Client" FROM `clients`;
c. Affichez les différentes dates de commandes sans répétition.
SELECT DISTINCT `dateCommande` FROM `commandes`;
d. Affichez les clients qui se prénomment « sophie ».
SELECT `nomClient`, `prenomClient` FROM `clients` WHERE `prenomClient`="Sophie";
e. Affichez les numéros des articles et leur quantité commandés par le client2.
SELECT `idArticle`, `quantiteCommande` FROM `commandes` WHERE `idClient`=2;
f. Affichez les noms des clients en majuscules.
SELECT UPPER(`nomClient`) as NomClient FROM `clients`
g. Affichez les noms des clients avec la première lettre en majuscule.
SELECT CONCAT( UPPER(LEFT(`nomClient`, 1)), LOWER(SUBSTRING(`nomClient`, 2)) ) AS NomClient FROM `clients`;
SELECT CONCAT( UPPER(LEFT(`nomClient`, 1)), LOWER(RIGHT(`nomClient`, LENGTH(`nomClient`)-1)) ) AS NomClient FROM `clients`;
h. Affichez les noms des clients qui ont 5caractères.
SELECT `nomClient` FROM `clients` WHERE LENGTH(`nomClient`)=5;
SELECT `nomClient` FROM `clients` WHERE `nomClient` like "_____";
i. Affichez les noms des clients qui commencent par « t » ou qui ont un « l » en troisième position.
SELECT `nomClient` FROM `clients` WHERE LEFT(`nomClient`,1)="T" OR `nomClient` like "__l%";
SELECT `nomClient` FROM `clients` WHERE `nomClient` like "T%" OR `nomClient` like "__l%";
SELECT `nomClient` FROM `clients` WHERE LEFT(`nomClient`,1)="T" OR SUBSTRING(`nomClient`,3,1) = "l";
j. Affichez le numéro de client, le numéro de commande, la date de commande et la date de paiement
attendue des commandes (=date_cde+15jours).
SELECT `idCommande`,`idClient`,`dateCommande`,ADDDATE(`dateCommande`,15) as DatePaiement  FROM `commandes`;
SELECT `idCommande`,`idClient`,`dateCommande`,DATE_ADD(`dateCommande`,Interval 15 Day ) as DatePaiement  FROM `commandes`;
k. Affichez la date et l'heure actuelles.
SELECT now();
l. Affichez l'ancienneté des clients.
SELECT DATEDIFF( DATE(NOW()), `dateEntreeClient`) AS "Jours d'ancienneté du client" FROM clients


m. Affichez la quantité maximale achetée par un client.
SELECT MAX(quantiteCommande) FROM commandes #-- Quantite max d'un client sur tout les clients
SELECT MAX(quantiteCommande), idclient FROM commandes GROUP BY idclient  #-- Quantite max pour chaque client

n. Affichez la quantité totale achetée par le client 1.
SELECT SUM(quantiteCommande), idclient FROM commandes WHERE idClient=2 #--quantité totale achetée par le client 2
SELECT SUM(quantiteCommande), idclient AS "la quantité totale achetée par le client 1" FROM commandes GROUP BY idclient  #--quantité totale tous les clients

o. Affichez la quantité moyenne achetée par le client 2.
SELECT AVG(quantiteCommande), idClient AS "quantité moyenne" FROM commandes WHERE idClient=2

p. Affichez les clients classés par ordre alphabétique de leur nom.
SELECT CONCAT(`nomClient`, " ", `prenomClient`) AS "Nom du Client" FROM clients ORDER BY nomClient

q. Affichez les articles classés selon leur prix décroissant. 
SELECT prixArticle, idArticle FROM articles ORDER BY prixArticle DESC