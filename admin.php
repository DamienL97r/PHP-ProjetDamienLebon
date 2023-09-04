<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Samples.php';
require_once __DIR__ . '/functions/addCategorie.php';
require_once './functions/functionsSQL.php';
require_once './functions/tableFunctions.php';
 ?>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="admin.php">Informations générales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin-samples.php">Samples</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin-categories.php">Catégories</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="admin-users.php">Utilisateurs</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

<div class="container-custom" >

    <div>
        <h2>Tous les samples</h2>
        <?php 
            $headers = getHeaderTable();
            $samples = getAllSamples();
            getTable($samples, $headers); 

        ?>
    </div>
    
    <div>
        <h2>Toutes les catégories</h2>

        <?php 
        $headers = getHeaderTableCategorie();
        $categories = getAllCategories();
        getTable($categories, $headers);
        ?>
    </div>

    <div>
        <h2>Tous les utilisateurs</h2>

        <?php 
        $headers = getHeaderTableUser();
        $users = getAllUsers();
        getTable($users, $headers);
        ?>
    </div>
    
</div>

<h2>Ajouter une catégorie</h2>

<form action="" method="post">

    <div class="form-group">
        <label for="nameCategorie">Entrer le nom de la nouvelle catégorie :</label>
        <input type="text" name="nameCategorie">
    </div>

    <button type="submit" class="btn btn-primary" value="Envoyer" name="submit">Envoyer</button>
</form>

<?php
require './layout/footer.php';


var_dump($_SESSION);
?>