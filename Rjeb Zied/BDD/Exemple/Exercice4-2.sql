1. Rechercher le prénom des employés et le numéro de la région de leur département.
SELECT `prenom`,dept.noregion FROM `employe`INNER JOIN dept ON employe.nodep=dept.nodept
2.Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées)
SELECT `prenom`,dept.nodept,dept.nom FROM `employe`INNER JOIN dept ON employe.nodep=dept.nodept
SELECT e.`prenom` AS "nom des employés",d.nodept AS "numéro département",d.nom AS "nom du département" FROM `employe` AS e INNER JOIN dept as d ON e.nodep=d.nodept
3.Rechercher le nom des employés du département Distribution. 
SELECT employe.nom FROM `employe`INNER JOIN dept ON employe.nodep=dept.nodept WHERE dept.nom="Distribution"
4.Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron
SELECT employe.nom as "Nom de l'employé", employe.salaire as "Salaire de l'employé", (SELECT employe.nom FROM employe WHERE titre="Président") as "Nom du patron", (SELECT employe.salaire FROM employe WHERE titre="Président") as "Salaire du Patron" 
FROM employe 
WHERE salaire>(SELECT `salaire` FROM employe WHERE `titre`="président") 
5.Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire.
SELECT `nom`,`titre` FROM `employe` WHERE `titre`= (SELECT `titre`FROM employe WHERE employe.nom="Amartakaldire")
6.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu un seul employé du département 31, classés par numéro de département et salaire. 
SELECT `nom`,`salaire`,`nodep` FROM `employe` WHERE salaire>salaire IN (SELECT `salaire` FROM employe WHERE employe.`nodep`=31) ORDER BY nodep, salaire
7.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire. 
SELECT `nom`,`salaire`,`nodep` FROM `employe` WHERE salaire> (SELECT MAX(`salaire`) FROM employe WHERE employe.`nodep`=31) ORDER BY `nodep`.`salaire`
8.Rechercher le nom et le titre des employés du service 31 qui ont un titre que l on trouve dans le département 32.
SELECT `nom`,`titre`FROM employe WHERE `nodep`=31 AND `titre`IN (SELECT `titre` FROM `employe` WHERE `nodep`=32)
9.Rechercher le nom et le titre des employés du service 31qui ont un titre l on ne trouve pas dans le département 32.
SELECT `nom`,`titre`FROM employe WHERE `nodep`=31 AND `titre`NOT IN (SELECT `titre` FROM `employe` WHERE `nodep`=32)
10.Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairant. 
SELECT `nom`,`titre`,`salaire`FROM employe WHERE `titre`= (SELECT `titre`FROM `employe` WHERE `nom`="fairent") AND salaire= (SELECT salaire FROM `employe` WHERE `nom`="fairent")
11.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n y a personne, classés par nuéro de département.
SELECT dept.`nodept`,dept.`nom`,employe.nom FROM dept LEFT JOIN employe ON employe.nodep=dept.nodept ORDER BY employe.nodep
12.Calculer le nombre d employés de chaque titre.
SELECT titre,COUNT(`titre`)AS NombreDeTitre FROM employe GROUP BY titre
13.Calculer la moyenne des salaires et leur somme, par région.
SELECT ROUND(AVG(`salaire`),2) AS moyenneSalire,SUM(employe.salaire) AS Somme,dept.noregion FROM `employe` INNER JOIN dept ON dept.nodept=employe.nodep GROUP BY dept.noregion
14.Afficher les numéros des départements ayant au moins 3 employés
SELECT `nodep` FROM `employe` GROUP BY nodep HAVING COUNT(`noemp`)>2
15.Afficher les lettres qui sont l initiale d au moins trois employés.
SELECT LEFT(`nom`,1) AS Initial FROM `employe`GROUP BY Initial HAVING COUNT(LEFT(`nom`,1))>2
16.Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l écart entre les deux.
SELECT MAX(salaire) as "Salaire maximum", MIN(salaire)as "Salaire minimum", (max(salaire)-min(salaire)) as "Ecart entre les deux"
from employe
17.Rechercher le nombre de titres différents. 
SELECT COUNT(DISTINCT titre) as "Nombre de titres différents" FROM employe
18.Pour chaque titre, compter le nombre d employés possédant ce titre. 
SELECT `employe`.`titre`, COUNT(*) FROM `employe` GROUP BY `employe`.`titre`
19.Pour chaquenom dedépartement,afficher le nom du département et lenombre d employés.
20.Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants.
21.Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés