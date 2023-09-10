<?php
require_once './layout/header.php';
require_once __DIR__ . '/classes/Samples.php';
require_once './functions/functionsSQL.php';
require_once './functions/searchFunctions.php';

try {
    $pdo = getDataBaseConnexion();
} catch (PDOException $e) {
    http_response_code(500);
    echo "Erreur de connexion : " . $e->getMessage() . "<br/>";
    die();
}
 ?>

<h3>Faites une recherche</h3>
 <form action="" method="post">

 <div class="container-categories-index">
    <?php 
        $categories = getAllCategories();
        foreach ($categories as $categorie) {
            echo "
                <div class='categories'>
                <label for='categories'>" . $categorie['name'] . "</label>" . " " . "<input type='checkbox' name='categories[]' value=" . $categorie['name'] .">" . "<br>" . "</div>";
    } ?>
 </div>

 <button type="submit" class="btn btn-primary" value="submitSearch" name="submitSearch">Rechercher</button>
 </form>

    <!-- Liste des samples disponibles -->
    <h2>Samples disponibles :</h2>
            <!-- Afficher la liste des fichiers MP3 disponibles à télécharger -->

<div class="container-custom">

    <?php 
    $samples = getAllSamples();
    foreach ($samples as $sample) {
    ?>

    <!-- Template SAMPLE CARD -->

    <a class="link-sample" href=page-sample.php?id=<?php echo $sample['id']; ?>>
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
    </a>

    <?php } ?>
</div>


<?php



// $stmt = $pdo->query("SELECT * FROM categories");

// while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
    
//     var_dump($row);
// }

// $stmt = $pdo->query("SELECT * FROM users");

// while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
    
//     var_dump($row);
// }
require './layout/footer.php';

?>
