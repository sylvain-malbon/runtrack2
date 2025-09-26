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
  ('Cyril', 'Zimmermann', '1989-01-02', 'homme', 'cyril@laplateforme.io'),
  ('Jessica', 'Soriano', '1995-09-08', 'femme', 'jessica@laplateforme.io'),
  ('Roxan', 'Roumégas', '2016-09-08', 'homme', 'roxan@laplateforme.io'),
  ('Pascal', 'Assens', '1999-12-31', 'homme', 'pascal@laplateforme.io'),
  ('Terry', 'Cristinelli', '2005-02-01', 'homme', 'terry@laplateforme.io'),
  ('Ruben', 'Habib', '1993-05-26', 'homme', 'ruben.habib@laplateforme.io'),
  ('Toto', 'Dupont', '2019-11-07', 'homme', 'toto@laplateforme.io');
```

👉 Tu peux remplir plusieurs fiches en une seule commande.

---

### 🏢 Exemple 3 : Ajouter des étages

```sql
INSERT INTO etage (id, nom, numero, superficie)
VALUES
  (1, 'RDC', 0, 500),
  (2, 'R+1', 1, 500);
```

---

### 🏫 Exemple 4 : Ajouter des salles

```sql
INSERT INTO salles (id, nom, id_etage, capacite)
VALUES
  (1, 'Lounge', 1, 100),
  (2, 'Studio Son', 1, 5),
  (3, 'Broadcasting', 2, 50),
  (4, 'Bocal Peda', 2, 4),
  (5, 'Coworking', 2, 80),
  (6, 'Studio Video', 2, 5);
```

⚠️ J'ai changé `etage`par `id_etage` car le champ `etage` n'existait pas.
