-- ❌ SELECT COUNT(*) FROM etages WHERE superficie
-- ✅ Pour additionner des valeurs numériques, on utilise SUM() et non COUNT()
-- ✅ COUNT(*) sert à compter les lignes, pas à additionner les mètres carrés
-- ✅ Cette requête calcule la superficie totale de tous les étages

SELECT SUM(superficie) FROM etages;

