
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
  dateDePeremption date NOT NULL,
  idCategorie int(11) NOT NULL
) ENGINE=InnoDB ;

CREATE TABLE IF NOT EXISTS categories (
  idCategorie int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  libelleCategorie varchar(50) NOT NULL
) ENGINE=InnoDB ;

ALTER TABLE baseproduits.produits ADD CONSTRAINT produits_categories_FK FOREIGN KEY (idCategorie) REFERENCES categories(idCategorie);
--
-- Chargement des données de la table produits et categories
--
INSERT INTO categories (idCategorie, LibelleCategorie) VALUES(1, 'Rouge');
INSERT INTO categories (idCategorie, LibelleCategorie) VALUES(2, 'Orange');
INSERT INTO categories (idCategorie, LibelleCategorie) VALUES(3, 'Jaune');
INSERT INTO categories (idCategorie, LibelleCategorie) VALUES(4, 'Vert');
INSERT INTO categories (idCategorie, LibelleCategorie) VALUES(5, 'Bleu');
INSERT INTO categories (idCategorie, LibelleCategorie) VALUES(6, 'Rose');

INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(1, 'gomme', 2, '2020-11-30', 1);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(2, 'crayon', 1, '2020-11-30', 2);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(3, 'règle', 5, '2020-10-30', 3);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(4, 'stylo', 2, '2020-12-30', 5);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(5, 'cahier', 12, '2020-11-30', 6);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(6, 'classeur', 15, '2020-11-30', 1);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(7, 'feuilles', 2, '2020-11-30', 5);
INSERT INTO produits (idProduit, libelleProduit, prix, dateDePeremption, idCategorie) VALUES(8, 'pochette', 6, '2020-11-20', 3);

