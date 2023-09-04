<?php 
require_once 'layout/header.php';
require_once 'functions/inscription.php';
?>


<div class="container-form-custom">

    <h2 class="form-group">Inscription</h2>
    
    <form class="form-inscription" action="" method="post">
    
        <div class="form-group">
            <label for="lastname">Nom</label>
            <input class="input-upload-file" type="text" name="lastname">
        </div>
    
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input class="input-upload-file" type="text" name="firstname">
        </div>
    
        <div class="form-group">
            <label for="dateOfBirth">Date de naissance</label>
            <input class="input-upload-file" type="date" name="dateOfBirth">
        </div>
    
        <div class="form-group">
            <label for="email">E-mail</label>
            <input class="input-upload-file" type="email" name="email">
        </div>
    
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="input-upload-file" type="password" name="password">
        </div>
    
        <button type="submit" class="btn btn-primary" value="Validate"  name="submit">Valider</button>
    </form>

</div>

<div class="form-group">
    <h2>Vous avez déjà un compte ?</h2>
    <a href="login.php">Se connecter</a>
</div>



<?php 
require_once 'layout/footer.php'; 