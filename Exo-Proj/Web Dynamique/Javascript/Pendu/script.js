function afficherTableau(tab) {
    document.write(tab.join(' - '));
}
// function afficherTableau(tab) {
//     let elm = "";
//     for (elm in tab){
//         document.write(tab[elm] + " ");
//     }
//     document.write("\n");

// }

function coderMot(mot, niveau) {
    var tab = mot.split('');
    if (niveau == 1) {
        for (var i = 1; i < ((tab.length) - 1); i++) {
            tab[i] = "_";
        }
    } else {
        for (var i = 0; i < (tab.length); i++) {
            tab[i] = "_";
        }
    }
    return tab;
}

function creer_dico() {
    let tabMots = [];
    //Cree le dictionnaire de mots
    tabMots.push ("AEROPORT",
        "AFFAIRE",
        "ALBUM",
        "ALPHABET",
        "AMENER",
        "AMPOULE",
        "ANCIEN",
        "ANORAK",
        "ANTENNE",
        "APPAREIL",
        "APPORTER",
        "APPUYER",
        "APRES",
        "ARC",
        "ARMOIRE",
        "ARRET",
        "ARRIERE",
        "ARRIVER",
        "ARROSER",
        "ASSIETTE",
        "ASSIS",
        "ATTACHER",
        "ATTENDRE",
        "ATTENTION",
        "ATTERRIR",
        "ATTRAPER",
        "AU",
        "AUTANT",
        "AUTO",
        "AUTOMOBILISTE",
        "AUTORADIO",
        "AUTOUR",
        "AVANCER",
        "AVANT",
        "AVEC",
        "AVION",
        "BAGAGE",
        "BAGUETTE",
        "BAIGNER",
        "BÂILLER",
        "BALLE",
        "BANC",
        "BARBE",
        "BARBOTER",
        "BARQUE",
        "BARRE",
        "BARREAU",
        "BAS",
        "BATEAU",
        "BEAUCOUP",
        "BIBLIOTHEQUE",
        "BLANC",
        "BLEU",
        "BOIS",
        "BOITE",
        "BONDIR",
        "BONNET",
        "BORD",
        "BOSSER",
        "BOTTE",
        "BOUCHER",
        "BOUCHON",
        "BOUDER",
        "BOUGER",
        "BOUSCULER",
        "BOUT",
        "BOUTEILLE",
        "BOUTON",
        "BRAS",
        "BRETELLE",
        "BRICOLAGE",
        "BRUIT",
        "BRUN",
        "BULLES",
        "BUREAU",
        "CABANE",
        "CABINET",
        "CAGOULE",
        "CAHIER",
        "CAISSE",
        "CALME",
        "CAMARADE",
        "CAMESCOPE",
        "CAMION",
        "CANARD",
        "CARNET",
        "CARREAU",
        "CARTABLE",
        "CARTON",
        "CASIER",
        "CASQUE",
        "CASQUETTE",
        "CASSE",
        "CASSER",
        "CASSEROLE",
        "CASSETTE",
        "CATALOGUE",
        "CEDE",
        "CEDEROM",
        "CEINTURE",
        "CERCEAU",
        "CHAINE",
        "CHAISE",
        "CHAISES",
        "CHANSON",
        "CHAPEAU",
        "CHARGER",
        "CHAT",
        "CHAUD",
        "CHAUSSETTE",
        "CHAUSSON",
        "CHAUSSURE",
        "CHEMISE",
        "CHERCHER",
        "CHEVILLE",
        "CHIFFRE",
        "CHOISIR",
        "CHOSE",
        "CHUCHOTER",
        "CHUTE",
        "CIGARETTE",
        "CINQ",
        "CISEAUX",
        "CLASSE",
        "CLAVIER",
        "CLE",
        "CLOU",
        "COIN",
        "COL",
        "COLERE",
        "COLLANT",
        "COLLE",
        "COLLER",
        "COLORIAGE",
        "COLORIER",
        "COMMENCER",
        "COMPARER",
        "COMPTER",
        "CONDUIRE",
        "CONSTRUIRE",
        "CONTE",
        "CONTINUER",
        "CONTRAIRE",
        "CONTRE",
        "COPAIN",
        "COPIER",
        "COQUILLAGE",
        "COQUILLETTE",
        "COQUIN",
        "CORDE",
        "CORPS",
        "COTE",
        "COU",
        "COUCHE",
        "COUDE",
        "COUDRE",
        "COULEUR",
        "COULOIR",
        "COUPER",
        "COURIR",
        "COURONNE",
        "COURT",
        "CRAIE",
        "CRAVATE",
        "CROCHET",
        "CROISSANT",
        "CUBE",
        "CUILLERE",
        "CUISSE",
        "CULOTTE",
        "CURIEUX",
        "CUVETTE",
        "DAME",
        "DANGER",
        "DANS",
        "DANSER",
        "DE",
        "DEBORDER",
        "DEBOUT",
        "DECHIRER",
        "DECOLLER",
        "DECORER",
        "DECOUPAGE",
        "DECOUPER",
        "DEDANS",
        "DEFENDRE",
        "DEHORS",
        "DELTAPLANE",
        "DEMANDER",
        "DEMARRER",
        "DEMOLIR",
        "DEPASSER",
        "DERNIER",
        "DERRIERE",
        "DESCENDRE",
        "DESOBEIR",
        "DESSIN",
        "DESSINER",
        "DETRUIRE",
        "DEUX",
        "DEUXIEME",
        "DEVANT",
        "DICTIONNAIRE",
        "DIFFERENCE",
        "DIFFERENT",
        "DIFFICILE",
        "DIRE",
        "DIRECTEUR",
        "DIRECTRICE",
        "DISCUTER",
        "DISPARAITRE",
        "DISTRIBUER",
        "DIX",
        "DOIGT",
        "DOIGTS",
        "DOMINO",
        "DONNER",
        "DORMIR",
        "DOS",
        "DOSSIER",
        "DOUCHE",
        "DOUCHER",
        "DOUX",
        "DROIT",
        "DU",
        "DUR",
        "EAU",
        "ECARTER",
        "ECHANGER",
        "ECHARPE",
        "ECHASSES",
        "ECHELLE",
        "ECLABOUSSER",
        "ECLAIRER",
        "ECOLE",
        "ECOUTER",
        "ECRAN",
        "ECRASER",
        "ECRIRE",
        "ECRITURE",
        "EFFACER",
        "EFFORT",
        "ELASTIQUE",
        "ELECTRICITE",
        "ELEVE",
        "EMMENER",
        "EMPORTER",
        "ENCORE",
        "ENERVE",
        "ENFANT",
        "ENFILER",
        "ENFONCER",
        "ENGIN",
        "ENLEVER",
        "ENTENDRE",
        "ENTONNOIR",
        "ENTOURER",
        "ENTREE",
        "ENTRER",
        "ENVELOPPE",
        "ENVOYER",
        "EPAIS",
        "EPAULE",
        "EPEE",
        "EQUIPE",
        "ESCABEAU",
        "ESCALADER",
        "ESCALIER",
        "ESCARGOT",
        "ESCARPIN",
        "ESSUYER",
        "ETAGERE",
        "ETANG",
        "ETIQUETTE",
        "ETROIT",
        "ETUDE",
        "ETUDIER",
        "EXPLIQUER",
        "EXTERIEUR",
        "FABRIQUER",
        "FACILE",
        "FAIRE",
        "FATIGUE",
        "FAUTE",
        "FAUTEUIL",
        "FEE",
        "FENETRE",
        "FERMER",
        "FESSE",
        "FEU",
        "FEUILLE",
        "FEUTRE",
        "FICELLE",
        "FIL",
        "FILET",
        "FILLE",
        "FILM",
        "FINIR",
        "FLECHE",
        "FLEUR",
        "FLOTTER",
        "FOIS",
        "FONCE",
        "FOND",
        "FOOTBALL",
        "FORT",
        "FOUILLER",
        "FRAPPER",
        "FREIN",
        "FROID",
        "FUSEE",
        "FUSIL",
        "GAGNER",
        "GANT",
        "GARAGE",
        "GARÇON",
        "GARDER",
        "GARDIEN",
        "GARE",
        "GAUCHE",
        "GENER",
        "GENOU",
        "GENTIL",
        "GLISSER",
        "GOLF",
        "GOMME",
        "GONFLER",
        "GOUTER",
        "GOUTTES",
        "GRAND",
        "GRIMPER",
        "GRIS",
        "GRONDER",
        "GROS",
        "GROUPE",
        "GRUE",
        "GYMNASTIQUE",
        "HABIT",
        "HANCHE",
        "HANDICAPE",
        "HAUT",
        "HELICOPTERE",
        "HEXAGONE",
        "HISTOIRE",
        "HORLOGE",
        "HUIT",
        "HUMIDE",
        "IDEE",
        "ILE",
        "IMAGE",
        "IMITER",
        "IMMEUBLE",
        "IMMOBILE",
        "INONDER",
        "INSEPARABLE",
        "INSTRUMENT",
        "INTERESSANT",
        "INTERIEUR",
        "INTRUS",
        "JALOUX",
        "JAMBES",
        "JAUNE",
        "JEAN",
        "JEU",
        "JOLI",
        "JOUER",
        "JOUET",
        "JUPE",
        "LAC",
        "LACER",
        "LACET",
        "LAINE",
        "LAISSER",
        "LARGE",
        "LAVABO",
        "LAVER",
        "LECTURE",
        "LETTRE",
        "LIERRE",
        "LIGNE",
        "LINGE",
        "LIRE",
        "LISSE",
        "LISTE",
        "LIT",
        "LITRE",
        "LIVRE",
        "LOIN",
        "LONG",
        "LUMIERE",
        "LUNETTES",
        "MADAME",
        "MAGAZINE",
        "MAGICIEN",
        "MAGIE",
        "MAGNETOSCOPE",
        "MAILLOT",
        "MAIN",
        "MAINS",
        "MAISON",
        "MAITRE",
        "MAITRESSE",
        "MAL",
        "MALADROIT",
        "MANCHE",
        "MANQUER",
        "MANTEAU",
        "MARCHE",
        "MARIONNETTE",
        "MARTEAU",
        "MATELAS",
        "MATERNELLE",
        "MELANGER",
        "MEME",
        "MENSONGE",
        "MESURER",
        "METAL",
        "METRE",
        "METTRE",
        "MEUBLE",
        "MICRO",
        "MIEUX",
        "MILIEU",
        "MINE",
        "MODELE",
        "MOINS",
        "MONTAGNE",
        "MONTER",
        "MONTRER",
        "MORCEAU",
        "MOT",
        "MOTEUR",
        "MOTO",
        "MOUCHOIR",
        "MOUFLE",
        "MOUILLE",
        "MOUILLER",
        "MOULIN",
        "MOUSSE",
        "MOYEN",
        "MUET",
        "MULTICOLORE",
        "MUR",
        "MUSCLE",
        "MUSIQUE",
        "NAGER",
        "NENUPHAR",
        "NEUF",
        "NŒUD",
        "NOIR",
        "NOM",
        "NOMBRE",
        "NOUVEAU",
        "NU",
        "NUMERO",
        "OBEIR",
        "OBJET",
        "OBLIGER",
        "ONGLE",
        "ORCHESTRE",
        "ORDINATEUR",
        "ORDRE",
        "OURS",
        "OUTIL",
        "OUVRIR",
        "PAGE",
        "PAIRE",
        "PANNE",
        "PANTALON",
        "PAPIER",
        "PARACHUTE",
        "PARCOURS",
        "PAREIL",
        "PARKING",
        "PARLER",
        "PARTAGER",
        "PARTIR",
        "PAS",
        "PASSERELLE",
        "PATAUGER",
        "PEDALO",
        "PEINDRE",
        "PEINTURE",
        "PELUCHE",
        "PENTE",
        "PERCER",
        "PERDRE",
        "PERLE",
        "PERSONNE",
        "PETIT",
        "PEU",
        "PEUR",
        "PHOTO",
        "PIED",
        "PIEDS",
        "PILOTE",
        "PINCEAU",
        "PION",
        "PLACARD",
        "PLAFOND",
        "PLAGE",
        "PLANCHE",
        "PLÂTRE",
        "PLEUVOIR",
        "PLI",
        "PLIAGE",
        "PLIER",
        "PLONGEOIR",
        "PLONGER",
        "PLUIE",
        "PLUS",
        "PNEU",
        "POCHE",
        "POIGNET",
        "POING",
        "POINT",
        "POINTE",
        "POINTU",
        "POISSON",
        "POLI",
        "POMPIERS",
        "PONT",
        "PORTE",
        "PORTEMANTEAU",
        "PORTER",
        "POSER",
        "POSTER",
        "POT",
        "POUBELLE",
        "POUCE",
        "POUSSER",
        "POUVOIR",
        "PREMIER",
        "PRENDRE",
        "PRENOM",
        "PREPARER",
        "PRES",
        "PRESENT",
        "PRESQUE",
        "PRESSER",
        "PRETER",
        "PRINCE",
        "PRISES",
        "PRIVER",
        "PROMETTRE",
        "PROPRE",
        "PUNAISE",
        "PUNIR",
        "PUZZLE",
        "PYJAMA",
        "PYRAMIDE",
        "QUAI",
        "QUATRE",
        "QUESTION",
        "RACONTER",
        "RADIATEUR",
        "RADIO",
        "RAME",
        "RAMPE",
        "RAMPER",
        "RANGER",
        "RATER",
        "RAYURE",
        "RECEVOIR",
        "RECITER",
        "RECOMMENCER",
        "RECREATION",
        "RECULER",
        "REFUSER",
        "REGARDER",
        "REINE",
        "REMETTRE",
        "REMPLACER",
        "REMPLIR",
        "RENTREE",
        "RENTRER",
        "RENVERSER",
        "REPARER",
        "REPETER",
        "REPONDRE",
        "RESPIRER",
        "RESSEMBLER",
        "RESTER",
        "RETARD",
        "REUSSIR",
        "REVENIR",
        "RIDEAU",
        "ROBE",
        "ROBINET",
        "ROI",
        "ROND",
        "ROUE",
        "ROUGE",
        "ROULADE",
        "ROULER",
        "ROUX",
        "RUBAN",
        "RUGUEUX",
        "SAGE",
        "SALADIER",
        "SALE",
        "SALLE",
        "SAUT",
        "SAUTER",
        "SAVON",
        "SCIE",
        "SEAU",
        "SEC",
        "SECHER",
        "SEMELLE",
        "SENS",
        "SENTIR",
        "SEPARER",
        "SEPT",
        "SERIEUX",
        "SERPENT",
        "SERRE",
        "SERRER",
        "SERRURE",
        "SERVIETTE",
        "SERVIR",
        "SEUL",
        "SIEGE",
        "SIESTE",
        "SILENCE",
        "SIX",
        "SOL",
        "SOLDAT",
        "SOLIDE",
        "SOMMEIL",
        "SONNER",
        "SONNETTE",
        "SORCIERE",
        "SORTIE",
        "SORTIR",
        "SOUFFLER",
        "SOULEVER",
        "SOULIGNER",
        "SOUPLE",
        "SOURD",
        "SOURIRE",
        "SOUS",
        "SPAGHETTI",
        "SPORT",
        "STYLO",
        "SUIVANT",
        "SUIVRE",
        "SUR",
        "SURFEUR",
        "TABLE",
        "TABLEAU",
        "TABLIER",
        "TABOURET",
        "TACHE",
        "TAILLE",
        "TAILLER",
        "TALON",
        "TAMBOUR",
        "TAMPON",
        "TAPER",
        "TAPIS",
        "TARD",
        "TASSE",
        "TELECOMMANDE",
        "TELEPHONE",
        "TELEVISION",
        "TENDRE",
        "TENIR",
        "TENNIS",
        "TERMINER",
        "TETE",
        "TIRER",
        "TIROIR",
        "TISSU",
        "TITRE",
        "TOBOGGAN",
        "TOILETTE",
        "TOMBER",
        "TORDU",
        "TOT",
        "TOUCHER",
        "TOUR",
        "TOURNER",
        "TOURNEVIS",
        "TRAIN",
        "TRAIT",
        "TRAMPOLINE",
        "TRANQUILLE",
        "TRANSPARENT",
        "TRANSPIRER",
        "TRANSPORTER",
        "TRAVAIL",
        "TRAVAILLER",
        "TRAVERSER",
        "TREMPER",
        "TRICHER",
        "TRICOT",
        "TRIER",
        "TROIS",
        "TROISIEME",
        "TROMPETTE",
        "TROP",
        "TROUER",
        "TROUS",
        "TROUSSE",
        "TUNNEL",
        "UN",
        "UNIFORME",
        "USE",
        "VACHE",
        "VALISE",
        "VASE",
        "VEHICULE",
        "VENIR",
        "VENTRE",
        "VERRE",
        "VERS",
        "VERSER",
        "VERT",
        "VESTE",
        "VETEMENT",
        "VIDER",
        "VIRAGE",
        "VIS",
        "VITE",
        "VITESSE",
        "VITRE",
        "VOITURE",
        "VOIX",
        "VOLER",
        "VOULOIR",
        "VOYAGE",
        "WAGON",
        "XYLOPHONE",
        "ZERO",
        "ZIGZAG");

    return tabMots;
}

function dessinerPendu(nbErreur)
{
    switch (nbErreur)
    {
        case 0:
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            break;
        case 1:
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "                      " + "\n");
            document.write( "     ________         " + "\n");
            break;
        case 2:
            document.write( "                      " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "     _|_______        " + "\n");
            break;
        case 3:
            document.write( "     ________         " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "     _|_______        " + "\n");
            break;
        case 4:
            document.write( "     ________         " + "\n");
            document.write( "      |     |         " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "     _|_______        " + "\n");
            break;
        case 5:
            document.write( "     ________         " + "\n");
            document.write( "      |     |         " + "\n");
            document.write( "      |     O         " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "     _|_______        " + "\n");
            break;
        case 6:
            document.write( "     ________         " + "\n");
            document.write( "      |     |         " + "\n");
            document.write( "      |     O         " + "\n");
            document.write( "      |     |         " + "\n");
            document.write( "      |     |         " + "\n");
            document.write( "      |               " + "\n");
            document.write( "      |               " + "\n");
            document.write( "     _|_______        " + "\n");
            break;
        case 7:
            document.write( "     ________          " + "\n");
            document.write( "      |     |          " + "\n");
            document.write( "      |     O          " + "\n");
            document.write( "      |    /|\\        " + "\n");
            document.write( "      |     |          " + "\n");
            document.write( "      |                " + "\n");
            document.write( "      |                " + "\n");
            document.write( "     _|_______         " + "\n");
            break
       case 8:
            document.write( "     ________          " + "\n");
            document.write( "      |     |          " + "\n");
            document.write( "      |     O          " + "\n");
            document.write( "      |    /|\\        " + "\n");
            document.write( "      |     |          " + "\n");
            document.write( "      |    / \\        " + "\n");
            document.write( "      |                " + "\n");
            document.write( "     _|_______         " + "\n");
            break;
        default:
            break;
    }

}


function testerLettre(lettre, tab, depart)
{
   var tabRec = tab.slice(depart); // on détermine le tableau de recherche en fonction de la position depart.
        //Array_slice, permet d'extraire le sous tableau en fonction de la position
        // exemple array_slice(['B','O','N','J','O','U','R'], 5) donne ['U','R']
        // console.log(tabRec);

    var res =tabRec.indexOf(lettre); //recherche la lettre dans le tableau
    if (res === -1) // === false pour eviter la confusion entre 0 et false
    {
        return [];
    }
    else
    {
        var reponse=[];
        reponse.push( res + depart);
        var tabPos = (reponse.concat( testerLettre(lettre, tab, res + depart + 1))); // array_merge permet de fusionner le tableau résultat avec le tableau de l'appel recursif
        // array_merge de [1,2] et [4] donne [1,2,4]
        console.log(tabPos);
        return tabPos;
    }
}

function ajouterUneLettre(lettre, tab, pos)
{
    tab[pos] = lettre;
    
    // console.log(tab);
    return tab;
}


function ajouterLesLettres(val, tab, tabpos, niveau)
{
    switch (niveau)
    {
        case 1:
            for (i = 0; i < tabpos.length; i++) //boucle permettant de parcourir le tableau des positions
                {
                tab = ajouterUneLettre(val, tab, tabpos[i]);
            }
            return tab;
        case 2:
        case 4:
            //on place les lettres une à une de gauche à droite
            for (i = 0; i < tabpos.length; i++) //on parcours les positions
                {
                var posEtudiee = tabpos[i];
                //on verifie que la position n'est pas occupée
                if (tab[posEtudiee] != val)
                {
                    tab = ajouterUneLettre(val, tab, posEtudiee);
                    return tab;
                }
            }
            return -1; // plus de place pour la lettre
        case 3:
            // on place les lettres aléatoirement
            var test=testerLettre(val,tab,0);    //on cherche les lettres déjà placées dans le mot code
            var pos = tabpos.filter(lettre => test.indexOf(lettre) === -1);
            console.log(pos);
            if(pos.length > 0)        //s'il reste des lettres à placer
            {
                var posetudie = pos[Math.floor(Math.random()*pos.length)];
                tab = ajouterUneLettre(val, tab, posetudie);
                return tab;
            }
            else    //il n'y a plus de lettre à placer
            {
                return -1;
            }
    }
    return -1;
}

function afficherMauvaisesLettres(listeLettres)
{
    document.write( "\n Les lettres non présentes sont ");
    var taille = listeLettres.length;
    for (let i = 0; i < taille; i++)
    {
        if (i == taille - 1) // evite la , après la dernière lettre
        {
            document.write( listeLettres[i] + "\n");
        }
        else
        {
            document.write( listeLettres[i] + ",");
        }
    }
}

function choisirMot(niv)
{
    var dico = creer_dico();
    if (niv == 4) // mot <= à 4 lettres
    {
        do
        {
            var nb =Math.floor(Math.random()*  (dico.length- 1));
            console.log(nb);
        } while ((dico[nb].length) > 4);
        return dico[nb];
    }
    else
    { //mot au hasard dans tout le dico
        return dico[Math.floor(Math.random() * (dico.length- 1))];
    }
}

function demanderLettre()
{
    do
    {
        document.write( "\n");
        var lettre = prompt("entrez une lettre : ").toUpperCase();
    } while ((!ctype_alpha(lettre)) || (strlen(lettre) > 1)); // ou utilisation de  while (!IntlChar::isalpha(lettre))
    return lettre;
}


// var niv=4;
// var test=choisirMot(niv);
// console.log(test);

// var t=["c","g","k","l","k"];
// var test=afficherMauvaisesLettres(t);
// document.write(t);

// var lettre="e";
// var tab = ["t","_","_","t"];
// var tabpos=[1,2];
// var niveau=3;
// test=ajouterLesLettres(lettre,tab,tabpos,niveau);
// document.write(test);
// console.log(test);

// var tab=creer_dico();
// tab =coderMot("Zied",1);
// console.log(tab);
// console.log(tab);
// afficherTableau(tab);

// dessinerPendu(3);
// var t=["c","g","k","l","k"];
// var lettre="k";
// testerLettre(lettre,t,2);
// var t=["c","g","k","l","k"];
// var lettre="i";
// ajouterUneLettre(lettre,t,2);