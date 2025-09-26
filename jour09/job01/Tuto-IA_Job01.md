# 🧑‍🏫 TUTO JOB01 - Expliqué pour un complet débutant

On va suivre les instructions de votre PDF et je vais être votre assistant.

## **🎯 L'objectif final : Construire un meuble de classement**

Imaginez que vous devez organiser les informations de votre école dans un grand meuble à tiroirs :

- La base de données `jour09` : C'est le **meuble entier**.
- Les tables (`etudiants`, `etage`, `salles`) : Ce sont les **trois grands tiroirs** du meuble.
- Les champs (colonnes) : Ce sont les **étiquettes** que vous définissez pour chaque tiroir, pour savoir quoi ranger dedans.
- Les enregistrements (lignes) : Ce sont les **dossiers** que vous ajouterez plus tard dans les tiroirs.

Le SQL est simplement le langage que l'on utilise pour donner les instructions de construction de ce meuble.

---

## **Étape 1 : Créer le meuble (`CREATE DATABASE`)**

La toute première instruction est de créer la base de données `jour09`. C'est l'équivalent de dire : "J'ai besoin d'un nouveau meuble de classement vide. Appelons-le `jour09`."

En SQL, la commande est toute simple ; dans l'onglet SQL de phpMyAdmin :

```sql
CREATE DATABASE jour09;
```

Cliquer sur Go en bas à droite.

Une fois la base créée, double‑cliquez sur son nom (jour09) dans la colonne de gauche de phpMyAdmin pour l’ouvrir. C’est exactement comme si vous tapiez la commande SQL suivante :

```sql
USE jour09;
```

Cliquer sur Go en bas à droite.

Autrement dit, vous dites à MySQL : « À partir de maintenant, tout ce que je vais créer ou modifier doit se faire à l’intérieur de cette base. »

Vous pouvez vérifier que c’est bien le cas : au‑dessus du bloc où l’on écrit les requêtes, il est indiqué : “Run SQL query/queries on database jour09:”.

Enfin, si vous cliquez sur la petite flèche à gauche dans phpMyAdmin, vous verrez l’arborescence de la base et ses tables.

📌 Important : phpMyAdmin n’est pas une autre façon de faire du SQL, c’est une surcouche graphique. Chaque fois que vous cliquez sur un bouton ou double‑cliquez sur une base, phpMyAdmin traduit vos actions en vraies commandes SQL qu’il envoie à MySQL.
👉 Donc, que vous écriviez USE jour09; ou que vous double‑cliquiez sur jour09, c’est exactement la même chose qui se passe en coulisses.

---

## **Étape 2 : Préparer le premier tiroir – Les Étudiants (`CREATE TABLE`)**

Maintenant, on va s'occuper du tiroir "etudiants". Le PDF nous dit quelles informations on veut stocker pour chaque étudiant. On doit donc créer les "étiquettes" (les colonnes) de ce tiroir.

Voici la commande de "construction" du tiroir :

```sql
CREATE TABLE etudiants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(255),
    nom VARCHAR(255),
    naissance DATE,
    sexe VARCHAR(25),
    email VARCHAR(255)
);
```

Cliquer sur Go en bas à droite.

**Traduction ligne par ligne :**

- `CREATE TABLE etudiants (` : "Construis-moi un tiroir nommé `etudiants` avec les étiquettes suivantes :"
- `id INT AUTO_INCREMENT PRIMARY KEY,` :
  - **Le concept :** C'est le **numéro d'identification unique** de chaque étudiant. Comme un numéro de sécurité sociale. Deux étudiants ne peuvent pas avoir le même.
  - **La traduction :** `id` est le nom de l'étiquette. `INT` veut dire que ce sera un **nombre entier**. `AUTO_INCREMENT` est magique : ça veut dire que l'ordinateur donnera lui-même le numéro (1, 2, 3...) à chaque nouvel étudiant. `PRIMARY KEY` (Clé Primaire) signifie que c'est **l'identifiant officiel et obligatoire**.
- `prenom VARCHAR(255),` :
  - **Le concept :** On veut stocker le prénom.
  - **La traduction :** `prenom` est le nom de l'étiquette. `VARCHAR(255)` veut dire que ce sera du **texte**, avec une longueur maximale de 255 caractères.
- `nom VARCHAR(255),` : Pareil que pour le prénom.
- `naissance DATE,` :
  - **Le concept :** On veut stocker la date de naissance.
  - **La traduction :** `naissance` est le nom de l'étiquette. `DATE` est un type spécial pour stocker des dates au format `AAAA-MM-JJ`.
- `sexe VARCHAR(25),` : Du texte de 25 caractères max pour stocker "Homme" ou "Femme".
- `email VARCHAR(255)` : Du texte de 255 caractères max pour l'email.

Et voilà \! Le premier tiroir est prêt à recevoir des dossiers d'étudiants.

---

## **Étape 3 : Les deux autres tiroirs (`etage` et `salles`)**

On fait exactement la même chose pour les étages et les salles, en suivant les instructions du PDF.

**Pour le tiroir `etage` :**

```sql
CREATE TABLE etage (
    id INT AUTO_INCREMENT PRIMARY KEY, -- L'identifiant unique de l'étage
    nom VARCHAR(255),                  -- Le nom de l'étage (ex: "RDC")
    numero INT,                        -- Le numéro (0, 1, 2...)
    superficie INT                     -- La superficie en m²
);
```

Cliquer sur Go en bas à droite.

**Pour le tiroir `salles` :**

```sql
CREATE TABLE salles (
    id INT AUTO_INCREMENT PRIMARY KEY, -- L'identifiant unique de la salle
    nom VARCHAR(255),                  -- Le nom de la salle (ex: "Lounge")
    id_etage INT,                      -- ICI, C'EST LA PARTIE IMPORTANTE !
    capacite INT                       -- Le nombre de places
);
```

Cliquer sur Go en bas à droite.

---

## **Remarque : Le Lien Magique (La Clé Étrangère)**

Regardez bien le champ `id_etage` dans la table `salles`. Il a l'air d'un simple nombre (`INT`), mais son rôle est **crucial**.

- **Le problème :** Comment savoir à quel étage se trouve la salle "Lounge" ? On ne veut pas réécrire "RDC, numéro 0, 500m²" dans la fiche de chaque salle de cet étage. Ce serait répétitif et source d'erreurs.
- **La solution :** Chaque étage a déjà son propre identifiant unique (`id`) dans le tiroir `etage`. Par exemple, le "RDC" aura l'`id` **1**.
  Dans le tiroir `salles`, pour la salle "Lounge", on va simplement écrire dans la case `id_etage` le numéro **1**.

`id_etage` est une **clé étrangère**. C'est une "note" qui fait un lien, un pont, vers un dossier dans un autre tiroir.

C'est le concept le plus important du SQL relationnel : on ne duplique pas l'information, **on crée des liens**.

_(Note : Dans le Job 01, le PDF ne demande pas de déclarer officiellement ce lien avec `FOREIGN KEY`. Il vous fait juste créer la colonne. Vous verrez plus tard comment forcer ce lien pour que la base de données refuse de créer une salle avec un `id_etage` qui n'existe pas)._

---

## **Étape 4 bis : Comment exporter dans phpMyAdmin**

- Dans la colonne de gauche, clique sur le nom de ta base (jour09) pour l’ouvrir.

- En haut, clique sur l’onglet Export.

- Laisse les options par défaut :

  - Méthode d’exportation : Rapide

  - Format : SQL

- Clique sur Exécuter (ou Go).

Ton navigateur va télécharger un fichier jour09.sql.

👉 Ce fichier contient toutes les instructions SQL (CREATE TABLE, etc.) que tu as écrites. C’est ton plan de montage sauvegardé. Tu pourras le réimporter plus tard sur un autre serveur pour recréer exactement la même base.
