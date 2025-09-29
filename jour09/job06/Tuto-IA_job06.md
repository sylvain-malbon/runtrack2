# 🧑‍🏫 TUTO JOB06 – Rechercher par début de prénom

---

## 🎯 L’objectif du JOB06

Tu veux consulter **toutes les infos** des étudiants dont le **prénom commence par un “T”**.  
C’est comme dire : “Montre-moi toutes les fiches dont le prénom commence par cette lettre.”

---

## 🧩 Étape 1 : Filtrer avec `LIKE`

👉 La commande SQL pour afficher tous les champs des étudiants dont le prénom commence par “T” est :

```sql
SELECT * FROM etudiants
WHERE prenom LIKE 'T%';
```

- `SELECT *` = je veux toutes les colonnes
- `FROM etudiants` = dans le tiroir `etudiants`
- `WHERE prenom LIKE 'T%'` = je filtre les prénoms qui commencent par “T”
  - `%` est un joker qui signifie “n’importe quelle suite de caractères”

---

## 🧠 Ce que tu as appris dans JOB06

| Concept     | Explication                                |
| ----------- | ------------------------------------------ |
| `LIKE 'T%'` | Filtrer les chaînes qui commencent par “T” |
| `%`         | Joker SQL pour “tout ce qui suit”          |

---

👉 Voilà, tu sais maintenant **faire des recherches partielles sur les prénoms**.  
Tu peux adapter cette commande pour d’autres lettres ou motifs.
