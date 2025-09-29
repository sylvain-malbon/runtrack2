-- ❌ COUNT * FROM etudiants → syntaxe invalide
-- ❌ COUNT FROM etudiant ... → il manque SELECT
-- ✅ En SQL, COUNT est une fonction → elle doit être appelée avec SELECT
-- ✅ Le * est un paramètre de COUNT() → il doit être placé entre parenthèses : COUNT(*)

SELECT COUNT(*) FROM etudiants;

