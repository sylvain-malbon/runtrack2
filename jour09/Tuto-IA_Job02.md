# 🧑‍🏫 TUTO JOB02 – Remplir et consulter les tiroirs

---

## 🎯 L’objectif du JOB02

Ton meuble (la base `jour09`) est construit, avec ses trois tiroirs (`etudiants`, `etage`, `salles`).  
Maintenant, il faut **mettre des dossiers dedans** (ajouter des données) et apprendre à **les relire**.

---

## 🧩 Étape 1 : Ajouter un dossier (`INSERT INTO`)

La commande magique pour insérer des données est :

```sql
INSERT INTO nom_de_la_table (colonne1, colonne2, ...)
VALUES (valeur1, valeur2, ...);
```

👉 C’est comme remplir une fiche cartonnée avec les infos dans le bon ordre.

---

### 📄 Exemple 1 : Ajouter un étudiant

```sql
INSERT INTO etudiants (prenom, nom, naissance, sexe, email)
VALUES ('Alice', 'Durand', '2000-05-12', 'femme', 'alice@example.com');
```

- `prenom`, `nom`, etc. = les étiquettes de la fiche
- `'Alice'`, `'Durand'`… = les infos que tu ranges dans les cases
- Pas besoin de mettre `id` : il se génère tout seul (1, 2, 3…)

---

### 📄 Exemple 2 : Ajouter plusieurs étudiants d’un coup

```sql
INSERT INTO etudiants (prenom, nom, naissance, sexe, email)
VALUES
('Marc', 'Lemoine', '1999-11-23', 'homme', 'marc@example.com'),
('Sophie', 'Martin', '2001-03-17', 'femme', 'sophie@example.com');
```

👉 Tu peux remplir plusieurs fiches en une seule commande.

---

### 🏢 Exemple 3 : Ajouter des étages

```sql
INSERT INTO etage (nom, numero, superficie)
VALUES
('Rez-de-chaussée', 0, 300),
('Premier étage', 1, 250);
```

---

### 🏫 Exemple 4 : Ajouter des salles

```sql
INSERT INTO salles (nom, id_etage, capacite)
VALUES
('Salle A', 1, 30),
('Salle B', 2, 25);
```

⚠️ Ici, `id_etage` doit correspondre à un étage existant.  
Exemple : `1` = Rez-de-chaussée, `2` = Premier étage.

---

## 🧩 Étape 2 : Lire les dossiers (`SELECT`)

Une fois les tiroirs remplis, tu veux les rouvrir pour voir ce qu’il y a dedans.  
La commande est :

```sql
SELECT colonnes FROM nom_de_la_table;
```

---

### 📖 Exemple 1 : Voir tous les étudiants

```sql
SELECT * FROM etudiants;
```

- `*` veut dire “toutes les colonnes”
- Tu verras toutes les fiches du tiroir `etudiants`

---

### 📖 Exemple 2 : Voir seulement certains champs

```sql
SELECT prenom, nom FROM etudiants;
```

👉 Tu ne sors que les prénoms et noms, pas les autres infos.

---

### 📖 Exemple 3 : Voir les salles avec leur étage

```sql
SELECT salles.nom AS salle, etage.nom AS etage
FROM salles
JOIN etage ON salles.id_etage = etage.id;
```

- `JOIN` = relier deux tiroirs
- `AS` = donner un petit surnom à la colonne pour l’affichage

Résultat : une liste des salles avec l’étage correspondant.

---

## 🧠 Ce que tu as appris dans JOB02

| Concept                     | Explication                                 |
| --------------------------- | ------------------------------------------- |
| `INSERT INTO ... VALUES`    | Ajouter un dossier dans un tiroir           |
| Plusieurs `VALUES`          | Ajouter plusieurs dossiers d’un coup        |
| `SELECT *`                  | Lire toutes les colonnes                    |
| `SELECT colonne1, colonne2` | Lire seulement certaines infos              |
| `JOIN`                      | Relier deux tiroirs pour combiner les infos |

---

👉 Voilà, tu sais maintenant **remplir tes tiroirs et les rouvrir pour lire les dossiers**.  
C’est la base de tout travail avec SQL.
