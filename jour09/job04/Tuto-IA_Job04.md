# 🧑‍🏫 TUTO JOB04 – Consulter certaines colonnes

---

## 🎯 L’objectif du JOB04

Tu sais déjà comment afficher toutes les fiches d’un tiroir (`SELECT *`).  
Mais parfois, tu ne veux pas tout voir : juste **certaines colonnes**.

---

## 🧩 Étape 1 : Voir le nom et la capacité des salles

👉 La commande SQL pour afficher uniquement les colonnes `nom` et `capacite` de la table `salles` est :

```sql
SELECT nom, capacite FROM salles;
```

- `SELECT nom, capacite` = je choisis les colonnes à afficher
- `FROM salles` = dans le tiroir `salles`

---

## 🧠 Ce que tu as appris dans JOB04

| Concept                     | Explication                                    |
| --------------------------- | ---------------------------------------------- |
| `SELECT colonne1, colonne2` | Afficher seulement certaines infos d’une table |

---

👉 Voilà, tu sais maintenant **cibler les colonnes que tu veux consulter**, sans tout sortir du tiroir.
