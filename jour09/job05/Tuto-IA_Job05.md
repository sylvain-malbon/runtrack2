# 🧑‍🏫 TUTO JOB05 – Filtrer et cibler certaines infos

---

## 🎯 L’objectif du JOB05

Tu veux consulter **seulement certains champs** d’un tiroir, et **seulement certains dossiers**.  
Par exemple : les prénoms, noms et dates de naissance des étudiantes.

---

## 🧩 Étape 1 : Sélectionner les étudiantes

👉 La commande SQL pour afficher uniquement les colonnes `prenom`, `nom` et `naissance` des étudiants de sexe féminin est :

```sql
SELECT prenom, nom, naissance FROM etudiants
WHERE sexe = 'femme';
```

- `SELECT prenom, nom, naissance` = je choisis les colonnes à afficher
- `FROM etudiants` = dans le tiroir `etudiants`
- `WHERE sexe = 'femme'` = je filtre les dossiers selon le champ `sexe`

---

## 🧠 Ce que tu as appris dans JOB05

| Concept                     | Explication                         |
| --------------------------- | ----------------------------------- |
| `SELECT colonne1, colonne2` | Afficher certaines colonnes         |
| `WHERE condition`           | Filtrer les lignes selon un critère |

---

👉 Voilà, tu sais maintenant **cibler à la fois les colonnes et les lignes** que tu veux consulter.
