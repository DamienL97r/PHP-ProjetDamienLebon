# Human-Booster-Examen | PHP-ProjetDamienLebon
## Examen : Objectif du projet => Valider les (à finir)
- Créer une solution web qui permet de fournir une interface aux utilisateurs pour consulter,télécharger et uploader des samples en format audio(mp3,wav,etc.).  (OK)
- Permettre à l'utilisateur de pouvoir s'inscrire et se connecter. (OK)
- Créer un espace administrateur où l'on peut CRUD toutes les données mises à dispositions. (!OK : CRUD incomplet. 'status-actuel' => CR)
## Accès admin Lucas !
#### "email" => "chmod777@gmail.com" | "password" => "coucou"

## Get started
#### Comment récuperer la base de données avec ses données ?
Tu pourras trouver le fichier .sql avec la bdd avec toutes ses données dans le dossier /config, voir l'image ci-dessous :
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/8f78093d-9c5e-4ce1-87ba-2516dfcffdeb)


## Insécurités détectées
#### Les doubles extensions
Si j'ajoutes un un fichier test.txt.mp3, ça fonctionne pour mon algo et mon application mais ce n'est pas sécuritaire... Je n'arrives pas exclure ce problème. (Comment faire ? Car ça peut être une entrée exploitable...)
![image](https://github.com/DamienL97r/PHP-ProjetDamienLebon/assets/117284330/d08027a0-9a2e-4844-aa14-6676a04a69ff)
