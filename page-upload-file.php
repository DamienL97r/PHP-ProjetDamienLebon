<?php 
require_once './functions/upload.php';
 ?>
    <div>
        <h1>Uploader un sample</h1>
        <!-- Formulaire pour l'upload de fichiers MP3 & WAV -->
        <form class="form-upload" action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <input class="input-upload-file" type="file" name="fileToUpload" id="fileToUpload">
            </div>

            <div class="container-categories">
                

                
            <?php 
            $categories = getAllCategories();
            foreach ($categories as $categorie) {
                echo "
                <div class='categories'>
                <label for='categories'>" . $categorie['name'] . "</label>" . " " . "<input type='checkbox' name='categories[]' value=" . $categorie['name'] .">" . "<br>" . "</div>";
            } ?>
            </div>

            <button type="submit" class="btn btn-primary" value="Upload" name="submit">Envoyer</button>
        </form>


        <?php 
require './layout/footer.php';
?>