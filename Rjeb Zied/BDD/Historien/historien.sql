#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE  IF EXISTS historien;
CREATE DATABASE historien.
USE Casse;

#------------------------------------------------------------
# Table: Blessure
#------------------------------------------------------------

CREATE TABLE historien.Blessure(
        idBlessure   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeBlessure Varchar (50) NOT NULL ,
        dateBlessure Date NOT NULL ,
        bataille     Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Bataille
#------------------------------------------------------------

CREATE TABLE historien.Bataille(
        idBataille  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomBataille Varchar (50) NOT NULL ,
        lieux       Varchar (50) NOT NULL ,
        datedebut   Date NOT NULL ,
        datefin     Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Grade
#------------------------------------------------------------

CREATE TABLE historien.Grade(
        idGrade       Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleGrade  Varchar (50) NOT NULL ,
        dateObtention Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: unite
#------------------------------------------------------------

CREATE TABLE historien.unite(
        idUnite          Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomUnite         Varchar (50) NOT NULL ,
        daterattachement Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soldat
#------------------------------------------------------------

CREATE TABLE historien.Soldat(
        idSoldat     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomSoldat    Varchar (50) NOT NULL ,
        prenomSoldat Varchar (50) NOT NULL ,
        dDN          Date NOT NULL ,
        dDD          Date ,
        idUnite      Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: obtient
#------------------------------------------------------------

CREATE TABLE historien.obtient(
        idSoldat Int NOT NULL ,
        idGrade  Int NOT NULL
	,CONSTRAINT obtient_PK PRIMARY KEY (idSoldat,idGrade)

	,CONSTRAINT obtient_Soldat_FK FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat)
	,CONSTRAINT obtient_Grade0_FK FOREIGN KEY (idGrade) REFERENCES Grade(idGrade)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: blesse
#------------------------------------------------------------

CREATE TABLE historien.blesse(
        idBlessure Int NOT NULL PRIMARY KEY,
        idSoldat   Int NOT NULL
	,CONSTRAINT blesse_PK  (idBlessure,idSoldat)

	,CONSTRAINT blesse_Blessure_FK FOREIGN KEY (idBlessure) REFERENCES Blessure(idBlessure)
	,CONSTRAINT blesse_Soldat0_FK FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: combat
#------------------------------------------------------------

CREATE TABLE historien.combat(
        idSoldat   Int NOT NULL ,
        idBataille Int NOT NULL
	,CONSTRAINT combat_PK PRIMARY KEY (idSoldat,idBataille)

	,CONSTRAINT combat_Soldat_FK FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat)
	,CONSTRAINT combat_Bataille0_FK FOREIGN KEY (idBataille) REFERENCES Bataille(idBataille)
)ENGINE=InnoDB;

ALTER TABLE

historien.Soldat ADD CONSTRAINT Soldat_unite_FK FOREIGN KEY (idUnite) REFERENCES unite(idUnite)