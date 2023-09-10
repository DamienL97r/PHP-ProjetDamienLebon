<?php
require_once './layout/header.php';
require_once './classes/Samples.php';
require_once './functions/functionsSQL.php';


if (isset($_POST["submit"])) {
    Samples::hasUploadsFolder();
    $checkerValidFile = new Samples();
    $isFileValid = $checkerValidFile->checkValidFile();

    
}
?>
