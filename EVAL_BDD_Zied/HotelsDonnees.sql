
#------------------------------------------------------------
#        Script Insertion de donnees.
#------------------------------------------------------------

--Insertion des données de la table `Stations`

insert into Stations(nomStation,altitude) values ("La Montagne","2500");
insert into Stations(nomStation,altitude) values ("Le Sud","200");
insert into Stations(nomStation,altitude) values ("La Plage","10");
insert into Stations(nomStation,altitude) values ("Alpe d Huez","1860");
insert into Stations(nomStation,altitude) values ("Areches","1200");
insert into Stations(nomStation,altitude) values ("Beaufort","1200");
insert into Stations(nomStation,altitude) values ("Aussois","1500");
insert into Stations(nomStation,altitude) values ("Avoriaz","1800");

--Insertion des données de la table `Hotels`

INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Le Magnifique","3","rue du bas","Pralo","1");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Hotel du haut","1","rue du haut","Pralo","1");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Le Narval","3","place de la liberation","Vonten","2");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Les Pissenlis","4","place du 14 juillet","Bretou","2");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("RR Hotel","5","place du bas","Bretou","2");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("La Brique","2","place du haut","Bretou","2");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Le Beau Rivage","3","place du centre","Toras","3");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Residence les marmottes","1","1 Chemin des randonneurs","Alpe d Huez","6");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Residence les edelweiss","5","2 Rue des sapins","Areches","2");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Residence les panoramas","4","7 Avenue de la neige","Beaufort","2");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Residence les sapins","5","8 Chemin des pissenlits","Aussois","4");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Chalets les marmottes","3","10 Rue des etables","Avoriaz","3");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Chalets les edelweiss","3","8 Avenue des sapins","Alpe d Huez","8");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Chalets les panoramas","2","3 Chemin de la neige","Areches","6");
INSERT INTO hotels(nomHotel,categorieHotel,adresseHotel,villeHotel,idStation)values("Chalets les sapins","5","3 Rue des pissenlits","Beaufort","8");

--Insertion des données de la table `Chambres`

INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("101","1","1","1");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("102","1","2","1");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("103","1","1","1");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("104","1","2","2");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("105","1","2","2");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("106","1","1","2");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("107","1","3","3");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("108","1","1","3");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("109","1","2","3");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("235","1","1","4");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("157","1","1","4");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("874","1","1","7");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("125","1","5","7");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("101","1","3","6");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("102","1","3","6");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("103","1","2","10");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("104","1","3","15");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("105","1","3","6");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("106","1","1","15");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("107","1","1","11");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("108","1","2","13");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("109","1","2","10");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("235","1","3","12");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("157","1","1","11");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("874","1","2","7");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("125","1","1","9");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("101","1","3","8");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("102","1","3","15");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("103","1","1","11");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("104","1","1","11");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("105","1","1","13");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("106","1","2","15");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("107","1","2","12");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("108","1","1","9");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("109","1","3","13");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("235","1","3","8");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("157","1","3","14");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("874","1","1","8");
INSERT INTO chambres(numChambre,typeChambre,capaciteChambre,idHotel)values("125","1","2","10");

--Insertion des données de la table `Clients`

INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("DOE","John","Rue Du General Leclerc","Chatenay Malabry");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("HOMME","Josh","Rue Danton","Palm Desert");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("PAUL","Weller","Rue Hoche","Londres");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("WHITE","Jack","Allee Gustave Eiffel","Detroit");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("CLAYPOOL","Les","Rue Jean Pierre Timbaud","San Francisco");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("SQUIRE","Chris","Place Paul Vaillant Couturier","Londres");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("WOOD","Ronnie","Rue Erevan","Londres");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("THUNDERS","Johnny","Rue Du General Leclerc","New York");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("JEUNEMAITRE","Eric","Rue Du General Leclerc","Chaville");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("KARAM","Patrick","Rue Danton","Courbevoie");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("RUFET","Corinne","Rue Hoche","Le Plessis Robinson");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("SAINT JUST ","Wallerand","Allee Gustave Eiffel","Marnes La Coquette");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("SANTINI","Jean-Luc","Rue Jean Pierre Timbaud","Chatenay Malabry");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("AIT","Eddie","Place Paul Vaillant Couturier","Le Plessis Robinson");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("BARBOTIN","Eddie","Rue Erevan","Chatenay Malabry");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("BERESSI","Isabelle","Rue Du General Leclerc","Londres");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("CAMARA","Lamine","Rue Ernest Renan","Antony");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("CECCONI","Frank","Rue Georges Marie","Chatenay Malabry");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("CHEVRON","Eric","Boulevard Gallieni","Suresnes");
INSERT INTO Clients(nomClient,prenomClient,adresseClient,villeClient)values("CIUNTU","Marie-Carole","Esplanade Du Belvedere","Meudon");

--Insertion des données de la table `Reserve`

INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("4","1","3","04/11/2019","13/11/2019","17/11/2019","400","50");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("3","1","1","20/04/2019","07/05/2019","09/05/2019","2400","800");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("5","2","2","11/01/2020","12/02/2020","18/02/2020","3400","100");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("6","2","4","19/06/2019","05/08/2019","18/08/2019","7200","180");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("7","3","5","02/04/2019","29/04/2019","03/05/2019","1400","450");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("8","4","6","20/10/2019","01/12/2019","15/12/2019","2400","780");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("9","4","6","27/02/2019","31/03/2019","04/04/2019","500","80");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("10","4","8","21/07/2019","16/08/2019","16/08/2019","40","0");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("11","8","15","12/10/2019","23/11/2019","29/11/2019","580","58");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("12","9","17","22/12/2019","27/01/2020","30/01/2020","140","14");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("13","8","15","21/07/2019","18/08/2019","21/08/2019","360","36");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("14","4","20","10/01/2019","20/02/2019","01/03/2019","1380","138");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("15","13","16","09/04/2019","17/04/2019","02/05/2019","420","42");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("16","13","16","21/05/2019","13/06/2019","26/06/2019","360","36");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("17","12","1","26/07/2019","09/08/2019","20/08/2019","680","68");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("18","21","15","29/11/2019","30/11/2019","14/12/2019","1280","128");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("19","14","19","12/03/2019","06/04/2019","09/04/2019","420","42");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("20","24","12","17/01/2019","24/01/2019","28/01/2019","260","26");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("21","12","9","02/01/2020","15/02/2020","24/02/2020","1380","138");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("22","4","12","10/09/2019","24/09/2019","01/10/2019","1430","143");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("23","23","1","11/05/2019","10/06/2019","14/06/2019","820","82");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("24","10","11","21/10/2019","24/10/2019","31/10/2019","650","65");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("25","20","14","12/01/2020","04/03/2020","09/03/2020","1290","129");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("26","15","19","02/04/2019","02/05/2019","09/05/2019","1030","103");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("27","17","17","04/01/2019","15/02/2019","25/02/2019","470","47");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("28","14","16","17/05/2019","31/05/2019","03/06/2019","1460","146");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("29","21","6","12/04/2019","23/05/2019","28/05/2019","1310","131");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("30","20","9","26/06/2019","15/07/2019","21/07/2019","460","46");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("31","18","17","09/04/2019","23/05/2019","27/05/2019","350","35");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("32","23","14","14/06/2019","02/08/2019","04/08/2019","890","89");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("33","12","14","06/03/2019","23/03/2019","31/03/2019","1440","144");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("34","19","17","27/03/2019","29/04/2019","07/05/2019","1010","101");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("35","16","13","11/02/2019","08/03/2019","22/03/2019","790","79");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("36","2","5","15/04/2019","23/04/2019","04/05/2019","270","27");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("37","19","19","25/03/2019","02/05/2019","16/05/2019","660","66");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("38","4","13","01/05/2019","14/06/2019","18/06/2019","140","14");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("39","19","14","10/01/2020","24/02/2020","29/02/2020","1460","146");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("40","4","6","24/11/2019","30/11/2019","01/12/2019","790","79");
INSERT INTO reserve(idReserve,idChambre,idClient,dateReservation,dateDebut,dateFin,prixReservation,arrhe)values("41","20","15","13/01/2020","30/01/2020","14/02/2020","390","39");
