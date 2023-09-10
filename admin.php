<?php
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ . '/classes/Samples.php';
require_once __DIR__ . '/classes/ErrorCode.php';
require_once __DIR__ . '/functions/addCategorie.php';
require_once './functions/functionsSQL.php';
require_once './functions/tableFunctions.php';


if ($_SESSION['role'] !== 'admin') {
  Utils::redirect('/../login.php?error=' . ErrorCode::ADMIN_ACCESS_ERROR);
}
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

<h1>Bonjour, <?php echo $_SESSION['firstname'] ?></h1>
<h1>Nombre de samples total</h1>

<h1>Nombre de catégories total</h1>

<h1>Nombre d'utilisateurs total</h1>

<?php
require './layout/footer.php';

?>