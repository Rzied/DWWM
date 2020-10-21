executer les 2 instructions suivantes sur la base
ALTER TABLE commandes ADD cde_total int;
UPDATE commandes SET cde_total = quantiteCommande * (select prixArticle from articles where articles.idArticle = commandes.idArticle)

Affichez le contenu de la table commande. Qu'y a-t-il de changé dans cette table ? Comment le total de la
commande a-t-il été calculé ? '
#--on a cree un nouveau attribut cde_total dans la table commande
#-- on calcule le nombre de commande multiplier par le prix de commande

A)Afficher le montant le plus élevé de commande.
SELECT MAX(cde_total) FROM commandes
SELECT MAX(`quantiteCommande`*articles.prixArticle) FROM `commandes` INNER JOIN articles ON commandes.idArticle = articles.idArticle;
B) Afficher le montant moyen des commandes.
SELECT ROUND (AVG(cde_total),2) FROM commandes
SELECT ROUND(AVG(`quantiteCommande`*articles.prixArticle),2) as `montant moyen` FROM `commandes` INNER JOIN articles ON commandes.idArticle = articles.idArticle;
C) Afficher le montant le plus bas de commande.
SELECT MIN(cde_total) FROM commandes
SELECT MIN(`quantiteCommande`*articles.prixArticle) as `montant moyen` FROM `commandes` INNER JOIN articles ON commandes.idArticle = articles.idArticle
D) Afficher le nombre de commandes qui ont été passées.
SELECT COUNT(*) FROM commandes
E) Afficher le montant moyen de commande par client
SELECT AVG(cde_total),idClient FROM commandes GROUP BY idClient
SELECT ROUND(AVG(`quantiteCommande`*articles.prixArticle),2) as `montant moyen` FROM `commandes` INNER JOIN articles ON commandes.idArticle = articles.idArticle GROUP BY idClient
F) Afficher le montant le plus élevé de commande par client.
SELECT MAX(cde_total),idClient FROM commandes GROUP BY idClient
G) Afficher le nombre de commandes par client.
SELECT COUNT(quantiteCommande),idClient FROM commandes GROUP BY idClient
H) Afficher le nombre darticles commandés en moyenne par client
SELECT AVG(quantiteCommande),idClient FROM commandes GROUP BY idClient
I) Afficher le nombre darticles commandés en moyenne par article.
SELECT AVG(quantiteCommande),idArticle FROM commandes GROUP BY idArticle
J) Afficher le nombre total darticles commandés par article.
SELECT SUM(quantiteCommande)as "total d'article",idArticle FROM commandes GROUP BY idArticle
K) Afficher le nombre moyen darticles par client et par date.

L) Afficher le nombre de commandes par jour.
M) Afficher le nombre de clients dans la table.
N) Afficher le nombre de clients différents qui ont passé commande.
O) Afficher le nombre darticles différents qui ont été commandés.
P) Afficher le nombre de jours différents de commandes