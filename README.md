# Human-Booster-Examen | PHP-ProjetDamienLebon
## Ce qui a été vu en cours :
- Tableaux
- Inclusion de fichiers
- Variables superglobales
- Formulaires
- Programmation orientée objet
- Sessions
- Upload de fichiers avec PHP
- Bases de données - PDO

## Examen : Objectif du projet => Acquérir les acquis qui ont été vu en cours
- Créer une solution web qui permet de fournir une interface aux utilisateurs pour consulter,télécharger et uploader des samples en format audio(mp3,wav,etc.).  (OK)
- Permettre à l'utilisateur de pouvoir s'inscrire et se connecter. (OK)
- Créer un espace administrateur où l'on peut CRUD toutes les données mises à dispositions. (!OK : CRUD incomplet. 'status-actuel' => CR)
## Accès admin Lucas !
#### "email" => "chmod777@gmail.com" | "password" => "coucou"

## Get started
#### Comment récuperer la base de données avec ses données ?
Tu pourras trouver le fichier .sql avec la bdd avec toutes ses données dans le dossier /config, voir l'image ci-dessous :
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/8f78093d-9c5e-4ce1-87ba-2516dfcffdeb)

## Voies d'améliorations
#### REGEX pour les passwords: Pas efficace pour le moment: voici le code qui est "censé fonctionné" :
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/4771f939-5c5c-4ea5-8419-a8351976d714)



#### Les doubles extensions
Si j'ajoutes un fichier test.txt.mp3, ça fonctionne pour mon algo et mon application mais ce n'est pas sécuritaire... Je n'arrives pas à exclure ce problème. (Comment faire ? Car ça peut être une entrée exploitable...)
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/d08027a0-9a2e-4844-aa14-6676a04a69ff)
