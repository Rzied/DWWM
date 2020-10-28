--Mettre les noms et prenoms des etudiants en minuscule

DELIMITER $$
CREATE PROCEDURE minuscule()
BEGIN
UPDATE etudiants SET etudiants.nomEtudiant=LCASE(etudiants.nomEtudiant);
UPDATE etudiants SET etudiants.prenomEtudiant=LCASE(etudiants.prenomEtudiant);
END $$
DELIMITER ;

--Afficher tous les étudiants qui ont eu une note de plus de 10, dans l'épreuve 3

DELIMITER $$
CREATE PROCEDURE affiche()
BEGIN
SELECT CONCAT(nomEtudiant, " ", prenomEtudiant) AS "nometudiants", note, idEpreuve FROM etuepr WHERE note>10 AND idEpreuve=3;
END$$
DELIMITER ;

--le SELECT simple
SELECT CONCAT(nomEtudiant, " ", prenomEtudiant) AS "NomEtudiants", avoir_note.note, avoir_note.idEpreuve AS "NumeroEpreuve" FROM etudiants 
INNER JOIN avoir_note ON etudiants.idEtudiant=avoir_note.idEtudiant WHERE note>10 AND idEpreuve=3

--Creation de la vue
CREATE VIEW etuepr AS SELECT etudiants.*, avoir_note.idEpreuve, avoir_note.note FROM etudiants
INNER JOIN avoir_note ON etudiants.idEtudiant=avoir_note.idEtudiant

--SELECT de la vue
SELECT CONCAT(nomEtudiant, " ", prenomEtudiant) AS "nometudiants", note, idEpreuve FROM etuepr WHERE note>10 AND idEpreuve=3

--Execution de procédure (au choix)
CALL 'affiche'
CALL affiche
CALL affiche()


--LEFT JOIN EXEMPLE
11.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n y a personne,
classés par numéro de département.
--On cherche à afficher tous les noms et numéro de departement, même ceux sans employe, donc on affiche les elements de toute la table dept, puis on lie le nom eploye avec le LEFT JOIN

SELECT dept.nodept, dept.nom, employe.nom FROM dept LEFT JOIN employe ON employe.nodep=dept.nodept ORDER BY nodept


SELECT employe.nodep, dept.nom, employe.nom FROM dept INNER JOIN employe ON employe.nodep=dept.nodept ORDER BY nodept


--CREATE VIEW
CREATE VIEW dl AS SELECT employe.nom, dept.nom AS "nomdept", dept.nodept FROM dept LEFT JOIN employe ON employe.nodep=dept.nodept

