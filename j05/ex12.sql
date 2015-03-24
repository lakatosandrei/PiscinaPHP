USE db_alakatos;
SELECT nom, prenom FROM fiche_personne WHERE nom LIKE "%-%" OR prenom LIKE "%-%" GROUP BY nom, prenom;
