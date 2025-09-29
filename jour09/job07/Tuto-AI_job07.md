# 🧑‍🏫 TUTO JOB07 – Sélectionner les étudiants majeurs

---

## 🎯 L’objectif du JOB07

Tu veux afficher **toutes les infos** des étudiants qui ont **plus de 18 ans**.  
C’est comme dire : “Montre-moi les fiches des étudiants majeurs.”

---

## 🧩 Étape 1 : Filtrer avec une condition sur la date de naissance

👉 On ne stocke pas directement l’âge dans la base.  
On le **calcule à partir de la date de naissance**, en comparant avec la date d’il y a 18 ans.

---

### ❌ Essais incorrects

```sql
-- essai faux : SELECT * FROM etudiant WHERE age = 18;
-- age n’est pas une colonne dans la table

-- essai incomplet : SELECT * FROM etudiant WHERE DATE <
-- il manque la colonne et la fonction de calcul
```

---

### ✅ Requête correcte

```sql
SELECT * FROM etudiants
WHERE naissance < DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
```

- `CURDATE()` → donne la date du jour
- `DATE_SUB(..., INTERVAL 18 YEAR)` → calcule la date d’il y a 18 ans
- `naissance < ...` → sélectionne les étudiants nés **avant cette date**, donc **âgés de plus de 18 ans**

---

## 🧠 Ce que tu as appris dans JOB07

| Concept                           | Explication                                |
| --------------------------------- | ------------------------------------------ |
| `DATE_SUB(..., INTERVAL 18 YEAR)` | Calcule la date d’il y a 18 ans            |
| `WHERE naissance < ...`           | Filtrer les étudiants nés avant cette date |

---

👉 Voilà, tu sais maintenant **filtrer les étudiants selon leur âge**, même si l’âge n’est pas stocké directement dans la base.
