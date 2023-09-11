# Human-Booster-Examen | PHP-ProjetDamienLebon --- tout le contenu est sur Main branch
## Ce qui a été vu en cours :
- Tableaux
- Inclusion de fichiers
- Variables superglobales
- Formulaires
- Programmation orientée objet
- Sessions
- Upload de fichiers avec PHP
- Bases de données - PDO

## Examen : Objectif du projet =>
- Créer une solution web qui permet de fournir une interface aux utilisateurs pour consulter,télécharger et uploader des samples en format audio(mp3,wav,etc.).  (OK)
- Créer un espace mon compte où l'utilisateur, une fois connecté, peut consulter son profil ainsi que ses données personnelles. (OK mais CRUD non effectif : only Read)
- Permettre à l'utilisateur de pouvoir s'inscrire et se connecter. (OK avec vérification mail et password sans le REGEX)
- Mise en place d'un espace administrateur (OK)
- Créer un espace administrateur où l'on peut CRUD toutes les données mises à dispositions. (!OK : CRUD incomplet. 'status-actuel' => CR)
- Créer un système de recherche par catégories, mais c'est pas complètement fonctionnel.
- Autoriser l'accès aux pages "admin" uniquement aux administrateurs.
- Upload de fichiers avec $_FILES (OK)

## Get started
### Accès admin Lucas !
#### "email" => "chmod777@gmail.com" | "password" => "coucou"
#### Comment récuperer la base de données avec ses données ?
Tu pourras trouver le fichier .sql avec la bdd avec toutes ses données dans le dossier /config, voir l'image ci-dessous :
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/8f78093d-9c5e-4ce1-87ba-2516dfcffdeb)

## Voies d'améliorations
#### Interface administrateur :
- CRUD incomplet :
- Je n'ai pas eu le temps de mettre en place les informations générales sur la page admin.php (nb de samples, nb de catégories et le nombre d'utilisateurs)
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/888fb7a1-2c8f-4ef0-a860-36d507c3b569)

#### Identifier un sample par rapport à l'utilisateur qui l'aurai uploadé
#### Système de recherche :
J'aurai aimé permettre à l'utilisateur de pouvoir trier les samples par type(mp3,wav...), par durée, par nom, par utilisateur...
#### REGEX pour les passwords: Pas efficace pour le moment: voici le code qui est "censé fonctionné" :
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/4771f939-5c5c-4ea5-8419-a8351976d714)



#### Les doubles extensions
Si j'ajoutes un fichier test.txt.mp3, ça fonctionne pour mon algo et mon application mais ce n'est pas sécuritaire... Je n'arrives pas à exclure ce problème. (Comment faire ? Car ça peut être une entrée exploitable...)
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/d08027a0-9a2e-4844-aa14-6676a04a69ff)
