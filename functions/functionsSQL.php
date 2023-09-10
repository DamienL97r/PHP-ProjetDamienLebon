<?php 




/**
 * @throws PDOExption
 */
function getDataBaseConnexion(): PDO {

    [
        'dbname' => $dbname,
        'host' => $host,
        'port' => $port,
        'charset' => $charset,
        'user' => $user,
        'password' => $password
      ] = parse_ini_file(__DIR__ . "/../config/db.ini");

        $pdo = new PDO("mysql:host=$host;port=$port; dbname=$dbname; charset=$charset", $user, $password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
}

// creer un sample en bdd
function createSample($id, $categories, $name, $type, $source): void {

        $con = getDatabaseConnexion();
        $sql = "INSERT INTO samples (id, categories, name, type, source) 
                VALUES ('$id', :categories, :name, :type , :source)";
        $stmt = $con->prepare($sql);

        $stmt->execute([
            'categories' => $categories,
            'name' => $name,
            'type' => $type,
            'source' => $source
        ]);
}

// recupere un sample en bdd
function readSample($id) {
    $con = getDatabaseConnexion();
	$sql = "SELECT * from samples where id=:id";
	$stmt = $con->prepare($sql);
	$stmt->execute([
        'id' => $id
    ]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}




// récuperer tous les samples
function getAllSamples() {
    $con = getDatabaseConnexion();
    $sql = 'SELECT * from samples';
    $rows = $con->query($sql);
    return $rows;
}

//récuperer tous les samples avec fetch
 function getAllNameOfSamples() {
     $con = getDatabaseConnexion();
     $sql = 'SELECT `samples`.`name` FROM `samples`';
     $stmt = $con->query($sql);

     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }




// creer un catégorie en bdd
function createCategorie($id, $name) {
    try {
        $con = getDatabaseConnexion();
        $sql = "INSERT INTO categories (id, name) 
                VALUES ('$id', '$name')";
        $con->query($sql);
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}


// récuperer toutes les catégories 
function getAllCategories() {
    $con = getDataBaseConnexion();
    $sql = 'SELECT * FROM categories';
    $rows = $con->query($sql);
    return $rows;
}





// Function REGEX check
function validatePassword($password) {
    $password_regex = "/^(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-]).{8,40}$/";
    if (!preg_match($password_regex, $password)) {
        echo 'Le mot de passe doit contenir entre 8 et 40 caractères et inclure au moins une majuscule, une minuscule, un chiffre et un caractère spécial.';

        // Pas de throw, tenter echo + msg d'erreur
    }
}

// Creer un user en bdd
function createUser($id, $firstname, $lastname, $dateOfBirth, $email, $password): void {
    $con = getDatabaseConnexion();
    $sql = "INSERT INTO users (id, firstname, lastname, date_of_birth, email, password) 
    VALUES ('$id', :firstname, :lastname, :dateOfBirth , :email, :password)";

    $stmt = $con->prepare($sql);

    $stmt->execute([
        'firstname' => $firstname,
        'lastname' => $lastname,
        'dateOfBirth' => $dateOfBirth,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);

    $_SESSION["status"]="connected";
    $_SESSION["role"]= null;
    $_SESSION["firstname"]= $firstname;
    $_SESSION["lastname"]= $lastname;
    $_SESSION["email"]= $email;
}


// récuperer tous les users
function getAllUsers() {
    $con = getDatabaseConnexion();
    $sql = 'SELECT * from users';
    $rows = $con->query($sql);
    return $rows;
}

// récuperer tous les users
function getUser(): array {
    $con = getDatabaseConnexion();
    $sql = 'SELECT * from users WHERE email=:email';
    $stmtUser = $con->prepare($sql);
    $stmtUser->execute([
            'email' => $_SESSION['email']
    ]);

    return $stmtUser->fetch(PDO::FETCH_ASSOC);
}