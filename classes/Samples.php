<?php 
class Samples {

    public const SAMPLE_DIR = __DIR__ . '/../uploads/';

    private int $uploadOk = 1;


    // Vérifier si le répertoire "uploads" existe, sinon le créer
    public static function hasUploadsFolder(): void{
        
        if (!file_exists(Samples::SAMPLE_DIR)) {
        mkdir(Samples::SAMPLE_DIR, 0744, true);
        }
    }

    public function checkValidFile(): void {
    /**
     * Récupère le chemin complet du fichier en lowercase du fichier uploadé via le formulaire. e.g: uploads/[nom-du fichier], voir:    var_dump($targetFile);
     * 
     * 
     * $_FILES-> Récupère le nom d'origine du fichier uploadé via le formulaire
     * basename-> Extrait le nom du fichier sans son chemin complet
     * strtolower-> Permet de mettre en lowercase
     */
    $targetFile = strtolower(Samples::SAMPLE_DIR . basename($_FILES["fileToUpload"]["name"]));


    // Vérification du nom du fichier en bdd
     $UploadName = strtolower($_FILES["fileToUpload"]["name"]);
    
    $TmpBddName = getAllNameOfSamples();
    $BddName = array_column($TmpBddName, 'name');

     if (array_search($UploadName, $BddName)) {
     echo "Ce nom de fichier existe déja, veuillez renommer ce fichier." . "<a class='back-to-home' href='page-upload-file.php'>Réessayer</a>";
     exit;
     }


    $this->uploadOk = 1; // Détermine si le téléchargement doit se faire => oui = 1, non = 0

    /**
     * Extrait l'extension du fichier de son chemin complet($targetFile)
     * pathinfo-> Récupère les infos sur le chemin du fichier, il y a 2 paramètres:
     * - Le chemin complet du fichier=> $targetFile 
     * - PATHINFO_EXTENSION=> Une constante qui indique l'élément qu'on veut extraire du chemin complet du fichier
     */
    $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);

    // Vérifie si le fichier est bien un fichier audio MP3 ou WAV
    if ($imageFileType !== "mp3" && $imageFileType !== "wav") {
        $this->uploadOk = 0;
        ?>
        <div class="error-formatFileMsg">
            <h3>Erreur lors de l'upload du fichier.</h3>
            <p>Vérifiez le format de votre fichier, voici les formats de fichier autorisés:</p>
            <ul>
                <li>mp3</li>
                <li>wav</li>
            </ul>
            <a class="back-to-home" href="index.php">Retour à l'accueil</a>
        </div>
        <?php

    } else {  var_dump($_FILES["fileToUpload"]);

        /**
         * move_uploaded_file-> Permet de déplacer un fichier téléchargé vers un nouvel emplacement qui a deux arguments:
         * - $_FILES: Obtient le chemin temporaire du fichier téléchargé
         * - $targetFile: Le chemin complet du fichier
         */
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Le fichier " . basename($_FILES["fileToUpload"]["name"]) . " a été correctement uploadé." . "<br>";

            // Récupérer les catégories sélectionnées
            $selectedCategories = isset($_POST["categories"]) ? $_POST["categories"] : [];

            // Convertir en chaîne pour stockage en base de données
            $categories = implode(', ', $selectedCategories);

            // Récupérer les valeurs du formulaire ou d'autres sources
            $id = ''; // définir la valeur de $id
    
            $name = strtolower($_FILES["fileToUpload"]["name"]); // définir la valeur de $name
    
            $type = $_FILES["fileToUpload"]["type"]; //Récuperer le mime type

            $source = '/uploads/' . $name;
            createSample($id, $categories, $name, $type, $source);
            ?>

                <div class="success-msg">
                    <h3>Succès</h3>
                    <p>Votre fichier a été uploadé avec succès!</p>
                    <a class="back-to-home" href="index.php">Retour à l'accueil</a>
                </div>

                <h2>Vous souhaitez uploader un autre fichier ?</h2>
            <?php

        } else {
            echo "Erreur lors de l'upload du fichier.";
        }
    }
    }

    
    public function getUploadOk(): int
    {
        return $this->uploadOk;
    }

    public function setUploadOk($uploadOk)
    {
        $this->uploadOk = $uploadOk;

        return $this;
    }

}
