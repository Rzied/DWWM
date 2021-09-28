
--
-- Base de données :  baseproduits
--
DROP DATABASE baseproduits;
CREATE DATABASE IF NOT EXISTS baseproduits ;
USE baseproduits;


DROP TABLE IF EXISTS produits;
CREATE TABLE IF NOT EXISTS produits (
  idProduit int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  libelleProduit varchar(50) NOT NULL,
  prix int(11) NOT NULL,
  dateDePeremption date NOT NULL
) ENGINE=InnoDB ;


DROP TABLE IF EXISTS clients;
CREATE TABLE IF NOT EXISTS clients (
  idClient int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nomClient varchar(50) NOT NULL,
  prenomClient varchar(50) NOT NULL,
  dateDeNaissance date NOT NULL
) ENGINE=InnoDB ;

--
-- Chargement des données de la table produits
--

INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(1, 'gomme', 2, '2020-11-30');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(2, 'crayon', 1, '2020-11-30');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(3, 'stylo', 5, '2022-11-30');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(4, 'livre', 13, '2020-1-3');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(5, 'feutre', 20, '2020-10-11');
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption) VALUES(6, 'marqueur', 11, '2020-07-03');

INSERT INTO clients (idClient, nomClient, prenomClient, dateDeNaissance) VALUES(1, 'RJEB', 'Zied', '2002-11-30');
INSERT INTO clients (idClient, nomClient, prenomClient, dateDeNaissance) VALUES(2, 'DUPON', 'Patrik', '2000-10-30');

