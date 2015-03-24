USE db_alakatos;
SELECT CONCAT(nom, ' ', prenom, ' ', DATE(date_naissance)) AS 'date de naissance (data nasterii)' FROM fiche_personne WHERE YEAR(date_naissance)=1989 GROUP BY nom;
