-- essai faux : SELECT * FROM etudiant WHERE age = 18;
-- essai incomplet : SELECT * FROM etudiant WHERE DATE <
SELECT * FROM etudiants
WHERE naissance < DATE_SUB(CURDATE(), INTERVAL 18 YEAR); -- completé