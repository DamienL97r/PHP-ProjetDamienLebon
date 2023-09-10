<?php 

require_once './layout/header.php';
require_once './functions/functionsSQL.php';

$userData = getUser();

 ?>

<h2>Bonjour <?php echo $userData['firstname'] . ' ' . $userData['lastname']?></h2>

<p>Nom : <?php echo $userData['lastname'] ?></p>
<p>Prénom : <?php echo $userData['firstname'] ?></p>
<p>E-mail : <?php echo $userData['email'] ?></p>
<p>Date de naissance : <?php echo $userData['date_of_birth'] ?></p>


<?php 
    if ($_SESSION['role'] === 'admin') {
?>
<p>Oh !!! Un <?php echo $userData['firstname'] ?> sauvage apparait ! Ça faisait longtemps que vous n'êtes pas venu ! <br>Vous qui faites partie des administrateurs... Souhaitez vous rejoindre votre <a href="admin.php">Tableau de bord</a> ?</p>

<?php 
    } ?>

<form action="" method="post">
    <button type="submit" class="btn btn-primary" value="logout" name="logout">Se déconnecter</button>
</form>

<?php

require_once './layout/footer.php';