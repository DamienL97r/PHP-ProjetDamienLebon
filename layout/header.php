<?php session_start();
require_once __DIR__ . '/../functions/logout.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque de Samples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/../assets/style.css">
</head>
<body class="body-custom">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HallOfSample</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="index.php">Accueil</a>
        <a class="nav-link" href="page-upload-file.php">Ajouter un sample</a>


      <?php if (isset($_SESSION['role'])) {

        if ($_SESSION['role'] === 'admin') {
        ?>

              <a class="nav-link" href="admin.php">Tableau de bord</a>

      <?php  } 

      }?>


        








        <?php 
        if (isset($_SESSION['status'])) { ?>

          <a class="nav-link" href="page-account.php"><img class="img-account" src="/../assets/IMG/Icones/icone-user.png" alt="">Mon compte</a>

          <form action="" method="post">
            <button type="submit" class="btn btn-primary" value="logout" name="logout">Se déconnecter</button>
          </form>

        <?php } else {
          ?>

          <a class="nav-link" href="page-inscription.php">Connection/Inscription</a>
          
          <?php } ?>

      </div>
    </div>
  </div>
</nav>