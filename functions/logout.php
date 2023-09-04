<?php
require_once __DIR__ . '/../classes/Utils.php';

if (isset($_POST['logout'])) {
    session_start();
    $_SESSION['status'] = false;
    $_SESSION['role'] = null;
    $_SESSION['email'] = '';
    $_SESSION["firstname"]= '';
    $_SESSION["lastname"]= '';
    
    Utils::redirect('index.php');
}

