# 🧑‍🏫 TUTO JOB03 – Filtrer, trier et compter les dossiers

---

## 🎯 L’objectif du JOB03

Tu sais maintenant remplir tes tiroirs et les rouvrir. Mais si tu as 200 fiches, tu ne veux pas toutes les sortir. Tu veux pouvoir :

- **Filtrer** : ne voir que certains dossiers
- **Trier** : mettre de l’ordre
- **Compter** : savoir combien de dossiers correspondent à un critère

---

## 🧩 Étape 1 : Filtrer avec `WHERE`

👉 C’est comme dire : “Ne me montre que les dossiers qui respectent telle condition.”

```sql
-- Étudiants nés après l’an 2000
SELECT * FROM etudiants
WHERE naissance > '2000-01-01';
```

```sql
-- Salles avec plus de 25 places
SELECT * FROM salles
WHERE capacite > 25;
```

---

## 🧩 Étape 2 : Trier avec `ORDER BY`

👉 C’est comme ranger tes dossiers par ordre alphabétique ou chronologique.

```sql
-- Trier les étudiants par date de naissance (du plus ancien au plus jeune)
SELECT * FROM etudiants
ORDER BY naissance ASC;

-- Trier les salles par capacité (de la plus grande à la plus petite)
SELECT * FROM salles
ORDER BY capacite DESC;
```

---

## 🧩 Étape 3 : Limiter avec `LIMIT`

👉 C’est comme dire : “Ne me montre que les 2 premiers dossiers.”

```sql
-- Voir seulement les 2 premiers étudiants
SELECT * FROM etudiants
LIMIT 2;
```

---

## 🧩 Étape 4 : Compter et regrouper avec `GROUP BY`

👉 C’est comme faire des piles de dossiers par catégorie, puis compter combien il y en a dans chaque pile.

```sql
-- Nombre de salles par étage
SELECT id_etage, COUNT(*) AS nb_salles
FROM salles
GROUP BY id_etage;
```

Résultat : une ligne par étage, avec le nombre de salles.

---

## 🧩 Étape 5 : Filtrer les groupes avec `HAVING`

👉 C’est comme dire : “Montre-moi seulement les piles qui contiennent plus d’un dossier.”

```sql
-- Étages qui ont plus d’une salle
SELECT id_etage, COUNT(*) AS nb_salles
FROM salles
GROUP BY id_etage
HAVING COUNT(*) > 1;
```

---

## 🧠 Ce que tu as appris dans JOB03

| Concept    | Explication                                              |
| ---------- | -------------------------------------------------------- |
| `WHERE`    | Filtrer les dossiers selon une condition                 |
| `ORDER BY` | Trier les dossiers (ASC = croissant, DESC = décroissant) |
| `LIMIT`    | Limiter le nombre de résultats                           |
| `GROUP BY` | Regrouper les dossiers par catégorie                     |
| `HAVING`   | Filtrer les groupes créés par `GROUP BY`                 |

---

👉 Avec JOB03, tu passes du simple “ouvrir le tiroir” à **manipuler intelligemment tes données**. Tu peux cibler, organiser et analyser.
