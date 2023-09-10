<?php 
require_once './layout/header.php';
require_once './functions/functionsSQL.php';

if (isset($_GET['id'])) {
    try {
        $id = $_GET['id'];
        $sample = readSample($_GET['id']);
        
        if ($sample) {

            ?>

<div class="sample-card">
            
    <h3> <?php echo $sample['name']; ?> </h3>
        
    <p>Format : <?php echo $sample['type']; ?></p>
        
    <figure>
        <audio controls src="<?php echo $sample     ['source'];?>"></audio>
    </figure>
        
    <a href="<?php echo $sample['source'];?>"       download >Télécharger</a>
        
    <div class="container-categorie">
        <p><?php echo $sample['categories']; ?></p>
    </div>
</div>


<p><a href="index.php">Retour à l'accueil</a></p>


            <?php
        } else {
            http_response_code(404);
            echo "Échantillon non trouvé.";
        }
    } catch (Exception) {
        echo "Echec !";
    }
}
?>


