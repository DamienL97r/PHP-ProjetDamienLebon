<?php
require_once __DIR__ . '/../classes/Utils.php';

if (isset($_POST['logout'])) {
    session_start();
    $_SESSION = [];
    session_destroy();
    
    Utils::redirect('index.php');
}

