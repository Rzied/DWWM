

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

--
-- Base de données :  `9511`
--
DROP DATABASE IF EXISTS `9511`;
CREATE DATABASE IF NOT EXISTS `9511` DEFAULT CHARACTER SET utf8 ;
USE `9511`;
-- --------------------------------------------------------

#------------------------------------------------------------
# Table: Eleves
#------------------------------------------------------------

CREATE TABLE Eleves(
        idEleve     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomEleve    Varchar (50) NOT NULL ,
        prenomEleve Varchar (50) NOT NULL ,
        Classe      Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matieres
#------------------------------------------------------------

CREATE TABLE Matieres(
        idMatiere      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleMatiere Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        idUtilisateur     Int  Auto_increment  NOT NULL PRIMARY KEY,
        Login              Varchar (50) NOT NULL ,
        nomUtilisateur    Varchar (50) NOT NULL ,
        prenomUtilisateur Varchar (50) NOT NULL ,
        motDePasse         Varchar (50) NOT NULL ,
        Role               Int NOT NULL ,
        idMatiere          Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: suit
#------------------------------------------------------------

CREATE TABLE Suivi(
        idSuivi    int Auto_increment  NOT NULL PRIMARY KEY,
        idEleve     Int NOT NULL,
        idMatiere   Int NOT NULL ,
        Note        Int NOT NULL ,
        Coefficient Int NOT NULL

	
)ENGINE=InnoDB;


ALTER TABLE Suivi ADD CONSTRAINT Suivi_Eleves_FK FOREIGN KEY (idEleve) REFERENCES Eleves(idEleve);
ALTER TABLE Suivi ADD CONSTRAINT Suivi_Matieres0_FK FOREIGN KEY (idMatiere) REFERENCES Matieres(idMatiere);



INSERT INTO Utilisateurs (idUtilisateur, Login, nomUtilisateur, prenomUtilisateur, motDePasse, Role, idMatiere) VALUES(null,'Zied', 'RJEB', 'Zied', '0000',1,1);
INSERT INTO Utilisateurs (idUtilisateur, Login, nomUtilisateur, prenomUtilisateur, motDePasse, Role, idMatiere) VALUES(null,'Paul', 'Dupon', 'paul', '0000',2,2);
    
INSERT INTO Matieres (idMatiere, libelleMatiere ) VALUES(null, 'Français');
INSERT INTO Matieres (idMatiere, libelleMatiere ) VALUES(null, 'Anglais');
INSERT INTO Matieres (idMatiere, libelleMatiere ) VALUES(null, 'Math');
INSERT INTO Matieres (idMatiere, libelleMatiere ) VALUES(null, 'Arabe');

INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, Classe) VALUES(null, 'RJEB', 'Zied', 'Bac info');
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, Classe) VALUES(null, 'Aarous', 'Sofiane', 'Bac pro');
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, Classe) VALUES(null, 'POIX', 'Martine', 'Bac math');
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve, Classe) VALUES(null, 'DUPON', 'thomas', 'Bac info');


INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '1', '3', '18', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '2', '3', '13', '2');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '3', '3', '16', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '4', '3', '19', '2');

INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '1', '2', '18', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '2', '2', '13', '2');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '3', '2', '16', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '4', '2', '19', '2');

INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '1', '1', '18', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '2', '1', '13', '2');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '3', '1', '16', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '4', '1', '19', '2');

INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '1', '4', '18', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '2', '4', '13', '2');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '3', '4', '16', '3');
INSERT INTO `suivi` (`idSuivi`, `idEleve`, `idMatiere`, `Note`, `Coefficient`) VALUES (NULL, '4', '4', '19', '2');