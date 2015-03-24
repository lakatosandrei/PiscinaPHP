USE db_alakatos;
SELECT SUBSTRING(REVERSE(telephone), 1, LENGTH(telephone) - 1) AS 'enoh-pelet' FROM distrib WHERE telephone LIKE "05%";
