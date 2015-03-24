USE db_alakatos;
SELECT count(*) FROM historique_membre WHERE DATE(date) > DATE('2006-10-30') AND DATE(date) < DATE('2007-07-27');
