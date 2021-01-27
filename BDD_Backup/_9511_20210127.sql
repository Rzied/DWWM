-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: 9511
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `9511`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `9511` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `9511`;

--
-- Table structure for table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eleves` (
  `idEleve` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(50) NOT NULL,
  `prenomEleve` varchar(50) NOT NULL,
  `Classe` varchar(50) NOT NULL,
  PRIMARY KEY (`idEleve`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eleves`
--

LOCK TABLES `eleves` WRITE;
/*!40000 ALTER TABLE `eleves` DISABLE KEYS */;
INSERT INTO `eleves` VALUES (1,'RJEB','Zied','Bac info'),(2,'Aarous','Sofiane','Bac pro'),(3,'POIX','Martine','Bac math'),(4,'DUPON','thomas','Bac info'),(10,'dsfgdfgdfgdf','hhhhhhhhhh','fdgdfgdfg');
/*!40000 ALTER TABLE `eleves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matieres` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMatiere` varchar(50) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES (1,'Français'),(2,'Anglais'),(3,'Math'),(4,'Arabe'),(5,'([value 1])');
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivi`
--

DROP TABLE IF EXISTS `suivi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suivi` (
  `idSuivi` int(11) NOT NULL AUTO_INCREMENT,
  `idEleve` int(11) NOT NULL,
  `idMatiere` int(11) NOT NULL,
  `Note` int(11) NOT NULL,
  `Coefficient` int(11) NOT NULL,
  PRIMARY KEY (`idSuivi`),
  KEY `Suivi_Eleves_FK` (`idEleve`),
  KEY `Suivi_Matieres0_FK` (`idMatiere`),
  CONSTRAINT `Suivi_Eleves_FK` FOREIGN KEY (`idEleve`) REFERENCES `eleves` (`idEleve`),
  CONSTRAINT `Suivi_Matieres0_FK` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivi`
--

LOCK TABLES `suivi` WRITE;
/*!40000 ALTER TABLE `suivi` DISABLE KEYS */;
INSERT INTO `suivi` VALUES (1,1,3,18,3),(2,2,2,13,2),(3,3,3,16,3),(4,4,4,19,2),(5,1,2,18,3),(6,2,2,13,2),(7,3,2,16,3),(8,4,2,19,2),(9,1,1,18,3),(10,2,1,13,2),(11,3,1,16,3),(12,4,1,19,2),(13,1,4,18,3),(14,2,4,13,2),(15,3,4,16,3),(16,4,4,19,2);
/*!40000 ALTER TABLE `suivi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `Role` int(11) NOT NULL,
  `idMatiere` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'Zied','RJEB','Zied','2c7a5a6bfa4b5baee3b981b7803c3747',1,1),(2,'Paul','Dupon','paul','2c7a5a6bfa4b5baee3b981b7803c3747',2,2);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-27 12:10:52
