<?php 
require_once __DIR__ . '/functionsSQL.php';

if (isset($_POST["submit"])) {

    try {
        $id = '';
        $name = strtolower($_POST['nameCategorie']);
        createCategorie($id, $name);
    } catch (Exception) {
        echo "Erreur ! La catégorie n'a pas été enregistré" ;
    }
}
?>