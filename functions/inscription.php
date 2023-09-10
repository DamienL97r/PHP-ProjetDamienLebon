<?php 

require_once './functions/functionsSQL.php';
require_once './classes/ErrorCode.php';

if (isset($_POST['submit'])) {
    try {

        if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['dateOfBirth']) || empty($_POST['email']) || empty($_POST['password'])) {
            Utils::redirect('/../page-inscription.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
          }
        
        $id = '';
        createUser($id, $_POST['firstname'], $_POST ['lastname'], $_POST['dateOfBirth'], $_POST['email'], $_POST['password']);
        echo "<p class='success-message-custom'>Félicitations ! Votre inscription a été enregistré avec succès !</p>"; 
        ?>
        <br>
        <a href="index.php">Retour à l'accueil</a>

        
        <?php 
    } catch (Exception) {
        echo "<p class='error-message-custom'>Votre inscription a échouée...</p>";
    }
}
