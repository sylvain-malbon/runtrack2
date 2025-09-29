-- SELECT * FROM etudiants 
-- WHERE naissance > DATE_SUB(CURDATE(),❌FROM 18 YEARS);

SELECT * FROM etudiants
WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
