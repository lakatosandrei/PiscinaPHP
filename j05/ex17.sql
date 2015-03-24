USE db_alakatos;
SELECT count(*) AS 'nr_abo', floor(avg(prix)) AS 'moy_abo', MOD(sum(prix), 42) AS 'ft' FROM abonnement;
