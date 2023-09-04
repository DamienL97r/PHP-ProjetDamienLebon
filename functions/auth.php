<?php
require_once __DIR__ . '/../layout/header.php';
require_once __DIR__ . '/../classes/Utils.php';
require __DIR__ . '/../classes/ErrorCode.php';
require_once __DIR__ . '/../functions/functionsSQL.php';

if (empty($_POST['email']) || empty($_POST['password'])) {
  Utils::redirect('/../login.php?error=' . ErrorCode::LOGIN_FIELDS_REQUIRED);
}

[
    'email' => $email,
    'password' => $password
] = $_POST;

$pdo = getDataBaseConnexion();

$stmtUser = $pdo->prepare("SELECT * FROM users WHERE email=:email");
$stmtUser->execute(['email' => $email]);

$user = $stmtUser->fetch();

if ($user === false) {
  Utils::redirect('/../login.php?error=' . ErrorCode::INVALID_CREDENTIALS);
  http_response_code(404);
  exit;
}

$userHash = $user['password'];

if (password_verify($password, $userHash)) {
  $_SESSION['status'] = 'connected';
  $_SESSION['role'] = $user['role'];
  $_SESSION['email'] = $user['email'];
  $_SESSION["firstname"]= $user['firstname'];
  $_SESSION["lastname"]= $user['lastname'];
  ?>

  <div class="info-message-custom">
    <h2>Félicitations !</h2>
    <p>Bonjour, <?php echo $user['email']; ?> vous etes connecté !</p>
    <a href='/../index.php'>Retour à l'accueil</a>
  </div>

  <?php

} else {
  Utils::redirect('/../login.php?error=' . ErrorCode::INVALID_CREDENTIALS);
  exit;
}

if ($user['role'] === 'admin') {
  ?>
  <p>Vous etes <?php echo $user['role'] ;?></p>
  <?php
} else {
  
}
// Verifier si l'utilisateur est admin ou pas     if $user['role'] = 'admin'