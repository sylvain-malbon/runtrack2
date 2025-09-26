# 🧑‍🏫 TUTO JOB04 – Les relations et les jointures

---

## 🎯 L’objectif du JOB04

Jusqu’ici, tu sais :

- Construire ton meuble (JOB01)
- Remplir les tiroirs et les rouvrir (JOB02)
- Filtrer, trier et compter les dossiers (JOB03)

👉 Maintenant, tu vas apprendre à **relier les tiroirs entre eux**.  
C’est le cœur du SQL relationnel : au lieu de répéter les infos partout, tu relies les tables grâce aux **clés étrangères** et tu les combines avec des **jointures**.

---

## 🧩 Étape 1 : Comprendre la clé étrangère

- Dans le tiroir `etage`, chaque étage a un identifiant unique (`id`).
- Dans le tiroir `salles`, on a une colonne `id_etage` qui note à quel étage se trouve la salle.

👉 `id_etage` est une **clé étrangère** : c’est un petit post-it qui dit “Va voir le tiroir `etage`, dossier n°X”.

---

## 🧩 Étape 2 : La jointure de base (`INNER JOIN`)

Tu veux afficher les salles **avec** le nom de leur étage.  
Tu dois donc ouvrir deux tiroirs en même temps et relier les fiches.

```sql
SELECT salles.nom AS salle, etage.nom AS etage
FROM salles
INNER JOIN etage ON salles.id_etage = etage.id;
```

### 🧠 Explication :

- `INNER JOIN` = ne garde que les salles qui ont un étage correspondant
- `ON salles.id_etage = etage.id` = la règle de correspondance
- `AS salle` et `AS etage` = juste pour renommer joliment les colonnes

---

## 🧩 Étape 3 : Les autres types de jointures

### 🔹 `LEFT JOIN`

👉 Garde **toutes les salles**, même celles qui n’ont pas encore d’étage associé.

```sql
SELECT salles.nom, etage.nom
FROM salles
LEFT JOIN etage ON salles.id_etage = etage.id;
```

Résultat : si une salle n’a pas d’étage, la colonne `etage.nom` sera vide (`NULL`).

---

### 🔹 `RIGHT JOIN`

👉 L’inverse : garde **tous les étages**, même ceux qui n’ont pas encore de salle.

```sql
SELECT salles.nom, etage.nom
FROM salles
RIGHT JOIN etage ON salles.id_etage = etage.id;
```

---

## 🧩 Étape 4 : Les relations 1:N et N:N

- **1:N (un à plusieurs)** :  
  Un étage peut avoir plusieurs salles.  
  → C’est ce que tu viens de voir avec `etage` ↔ `salles`.

- **N:N (plusieurs à plusieurs)** :  
  Exemple : un étudiant peut réserver plusieurs salles, et une salle peut être réservée par plusieurs étudiants.  
  → On crée alors une **table intermédiaire** `reservations` :

```sql
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_etudiant INT,
    id_salle INT,
    FOREIGN KEY (id_etudiant) REFERENCES etudiants(id),
    FOREIGN KEY (id_salle) REFERENCES salles(id)
);
```

Puis on peut faire une jointure sur trois tables pour savoir **qui a réservé quelle salle**.

---

## 🧠 Ce que tu as appris dans JOB04

| Concept       | Explication                                                            |
| ------------- | ---------------------------------------------------------------------- |
| Clé étrangère | Un post-it qui relie un dossier à un autre tiroir                      |
| `INNER JOIN`  | Relier deux tiroirs et ne garder que les correspondances               |
| `LEFT JOIN`   | Garder toutes les fiches du tiroir de gauche, même sans correspondance |
| `RIGHT JOIN`  | Garder toutes les fiches du tiroir de droite, même sans correspondance |
| Relation 1:N  | Un étage → plusieurs salles                                            |
| Relation N:N  | Plusieurs étudiants ↔ plusieurs salles (via une table intermédiaire)   |

---

👉 Avec JOB04, tu comprends enfin pourquoi on parle de **bases relationnelles** : tout l’intérêt est de **lier les infos entre elles** au lieu de les répéter partout.
