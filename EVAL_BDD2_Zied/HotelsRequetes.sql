1.SELECT `nomHotel`,`villeHotel` FROM `hotels`
2.SELECT `nomClient`,`prenomClient`,`adresseClient`,`villeClient` FROM `clients` WHERE `nomClient`="White"
3.SELECT `nomStation`,`altitudeStation` FROM `stations` WHERE `altitudeStation`<1000
4.SELECT `numChambre`,`capaciteChambre` FROM `chambres` WHERE `capaciteChambre`>1
5.SELECT `nomClient`,`villeClient` FROM `clients` WHERE `villeClient`!= "Londres"
6.SELECT stations.nomStation,`nomHotel`,`categorieHotel`,`villeHotel` FROM `hotels` INNER JOIN stations ON stations.idStation=hotels.idStation
7.SELECT chambres.numChambre,`nomHotel`,`categorieHotel`,`villeHotel` FROM `hotels` INNER JOIN chambres ON chambres.idHotel=hotels.idHotel
8.SELECT clients.nomClient,`dateReservationSejour`,`dateDebutSejour`,`dateFinSejour` FROM `reservations` INNER JOIN clients ON clients.idClient=reservations.idClient
9.SELECT `numChambre`,hotels.nomHotel,stations.nomStation FROM `chambres` 
INNER JOIN hotels ON hotels.idHotel=chambres.idHotel
INNER JOIN stations ON stations.idStation=hotels.idStation
10.SELECT `numChambre`,hotels.nomHotel,hotels.categorieHotel,hotels.villeHotel,`capaciteChambre` FROM `chambres`
INNER JOIN hotels ON hotels.idHotel=chambres.idHotel
WHERE `capaciteChambre`>1 AND hotels.villeHotel="Bretou"
11.SELECT stations.nomStation, COUNT(*) AS "Nombre d'hotel" FROM `hotels` INNER JOIN stations ON stations.idStation=hotels.idStation GROUP BY stations.nomStation
12.SELECT stations.nomStation, COUNT(*) AS "Nombre de chambre" FROM chambres
INNER JOIN hotels ON hotels.idHotel=chambres.idHotel
INNER JOIN stations ON stations.idStation=hotels.idStation
GROUP BY stations.nomStation
13.SELECT stations.nomStation, COUNT(*) AS "Nombre de chambre" FROM chambres
INNER JOIN hotels ON hotels.idHotel=chambres.idHotel
INNER JOIN stations ON stations.idStation=hotels.idStation
WHERE chambres.capaciteChambre>1
GROUP BY stations.nomStation
14.SELECT hotels.nomHotel  FROM `reservations` 
INNER JOIN chambres ON chambres.IdChambre=reservations.IdChambre
INNER JOIN hotels ON hotels.idHotel=chambres.idHotel
INNER JOIN clients ON clients.idClient=reservations.idClient
WHERE reservations.idClient =
(SELECT idClient FROM clients WHERE clients.nomClient="Squire")
15.SELECT stations.nomStation,ROUND(AVG( DATEDIFF(`dateFinSejour`,`dateDebutSejour`)),2) AS "Duree moyenne de Reservation" FROM `reservations`
INNER JOIN chambres ON chambres.IdChambre=reservations.IdChambre
INNER JOIN hotels ON hotels.idHotel=chambres.idHotel
INNER JOIN stations ON stations.idStation=hotels.idStation
GROUP BY stations.nomStation
16.CREATE VIEW StationChambre AS SELECT stations.nomStation,stations.altitudeStation,hotels.*,chambres.`IdChambre`,chambres.`numChambre`,chambres.`typeChambre`,chambres.`capaciteChambre` FROM stations
INNER JOIN hotels ON hotels.idStation=stations.idStation
INNER JOIN chambres ON chambres.idHotel=hotels.idHotel
17.CREATE VIEW StationChambreLeft AS SELECT stations.nomStation,stations.altitudeStation,hotels.*,chambres.`IdChambre`,chambres.`numChambre`,chambres.`typeChambre`,chambres.`capaciteChambre` FROM chambres
LEFT JOIN hotels ON hotels.idHotel=chambres.idHotel
LEFT JOIN stations ON stations.idStation=hotels.idStation
18.