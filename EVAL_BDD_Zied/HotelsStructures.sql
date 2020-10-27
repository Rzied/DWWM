#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS HotelsBase;

CREATE DATABASE HotelsBase DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE HotelsBase;

#------------------------------------------------------------
# Table: Stations
#------------------------------------------------------------
CREATE TABLE HotelsBase.Stations(
    idStation Int Auto_increment NOT NULL PRIMARY KEY,
    nomStation Varchar (50) NOT NULL,
    altitude Varchar (50) NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------
CREATE TABLE HotelsBase.Hotels(
    idHotel Int Auto_increment NOT NULL PRIMARY KEY,
    nomHotel Varchar (50) NOT NULL,
    categorieHotel Varchar (50) NOT NULL,
    adresseHotel Varchar (150) NOT NULL,
    villeHotel Varchar (100) NOT NULL,
    idStation Int NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------
CREATE TABLE HotelsBase.Chambres(
    idChambre Int Auto_increment NOT NULL PRIMARY KEY,
    numChambre Int NOT NULL,
    typeChambre Varchar (100) NOT NULL,
    capaciteChambre Int NOT NULL,
    idHotel Int NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------
CREATE TABLE HotelsBase.Clients(
    idClient Int Auto_increment NOT NULL PRIMARY KEY,
    nomClient Varchar (50) NOT NULL,
    prenomClient Varchar (50) NOT NULL,
    adresseClient Varchar (100) NOT NULL,
    villeClient Varchar (100) NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

#------------------------------------------------------------
# Table: Reserve
#------------------------------------------------------------
CREATE TABLE HotelsBase.Reserve(
    idReserve Int Auto_increment NOT NULL PRIMARY KEY,
    idChambre Int NOT NULL,
    idClient Int NOT NULL,
    dateReservation Date NOT NULL,
    dateDebut Date NOT NULL,
    dateFin Date NOT NULL,
    prixReservation Double NOT NULL,
    arrhe Double NOT NULL
) ENGINE = INNODB DEFAULT CHARSET = utf8;

#------------------------------------------------------------
# Clés Etrangères
#------------------------------------------------------------
ALTER TABLE
    HotelsBase.Hotels
ADD
    CONSTRAINT Hotels_Stations_FK FOREIGN KEY (idStation) REFERENCES Stations(idStation);

ALTER TABLE
    HotelsBase.Chambres
ADD
    CONSTRAINT Chambres_Hotels_FK FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel);

ALTER TABLE
    HotelsBase.Reserve
ADD
    CONSTRAINT Reserve_Chambres_FK FOREIGN KEY (idChambre) REFERENCES Chambres(idChambre);

ALTER TABLE
    HotelsBase.Reserve
ADD
    CONSTRAINT Reserve_Clients0_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient);