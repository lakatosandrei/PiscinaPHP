USE db_alakatos;
SELECT count(*) AS 'films' FROM historique_membre WHERE (DATE(date) > DATE('2006-10-30') AND DATE(date) < DATE('2007-07-27')) OR DATE(date) LIKE "%-12-24";
