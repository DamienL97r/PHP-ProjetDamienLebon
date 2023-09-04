<?php 

require_once './functions/functionsSQL.php';

if (isset($_POST['submit'])) {
    try {
        $id = '';
        createUser($id, $_POST['firstname'], $_POST ['lastname'], $_POST['dateOfBirth'], $_POST  ['email'], $_POST['password']);
        echo "Félicitations ! Votre inscription a été enregistré avec succès !"; 
        ?>
        <br>
        <a href="index.php">Retour à l'accueil</a>

        <?php 
    } catch (Exception) {
        echo "Votre inscription a échouée...";
    }
}
