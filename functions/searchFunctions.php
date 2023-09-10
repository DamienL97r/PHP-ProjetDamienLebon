<?php

function searchByCategories() {
    $con = getDatabaseConnexion();

    // Vérifier si les catégories ont été sélectionnées dans le formulaire
    if(isset($_POST['categories']) && is_array($_POST['categories']) && !empty($_POST['categories'])) {
        // Créer un tableau pour stocker les catégories sélectionnées
        $selectedCategories = array_map('htmlspecialchars', $_POST['categories']);

        // Construire la condition WHERE pour le filtrage par catégorie
        $where = " WHERE ";
        foreach($selectedCategories as $category) {
            $where .= "categories LIKE '%" . $category . "%' OR ";
        }
        // Supprimer le dernier " OR " de la clause WHERE
        $where = rtrim($where, " OR ");
        $sql = "SELECT * FROM samples" . $where;

        $stmt = $con->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $sql = "SELECT * FROM samples";
        $stmt = $con->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (isset($_POST['submitSearch'])) {

    if(empty($_POST['submitSearch'])) {
        echo "<p class='error-message-custom'>Aucun résultat ne correspond à votre recherche.</p>";
    }
    $results = searchByCategories();

    ?>
    <h3>Résultat de votre recherche :</h3>
    <div class="container-custom">

    <?php 
    foreach ($results as $result) {
    ?>

    <!-- Template SAMPLE CARD -->

    <a class="link-sample" href=page-sample.php?id=<?php echo $result['id']; ?>>
        <div class="sample-card">
            
            <h3> <?php echo $result['name']; ?> </h3>
        
            <p>Format : <?php echo $result['type']; ?></p>
        
            <figure>
                <audio controls src="<?php echo $result     ['source'];?>"></audio>
            </figure>
        
            <a href="<?php echo $result['source'];?>"       download >Télécharger</a>
        
            <div class="container-categorie">
                <p><?php echo $result['categories']; ?></p>
            </div>
        </div>
    </a>

    <?php } ?>
</div>
<?php
}



