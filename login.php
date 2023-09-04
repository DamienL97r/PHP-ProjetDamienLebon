<?php 
require_once './layout/header.php';
require_once './classes/ErrorCode.php';
?>

<h1 class="form-group">Connexion</h1>

<?php if (isset($_GET['error'])) { ?>
  <div class="error">
    <?php echo ErrorCode::getErrorMessage(intval($_GET['error'])); ?>
  </div>
<?php } ?>

<form class="form-login" action="./functions/auth.php" method="post">
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" name="email" id="email" />
  </div>
  <div class="form-group">
    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" />
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Connexion</button>
</form>

<?php require_once 'layout/footer.php';