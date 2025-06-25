<?php

$username = $_POST["username"];
$password = $_POST["password"];



$mysql_username = "root";
$mysql_password = "";
$mysql_db = "php_pdo";

try {
    $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
    // Etablir la connexion avec MySQL
    $pdo = new PDO($dsn, $mysql_username, $mysql_password);
    // injection SQL
    //$select = "SELECT * FROM utilisateurs WHERE username = '$username' AND password = '$password'";
    $select = "SELECT * FROM utilisateurs WHERE username = ? AND password = ?";
    // Exécuter la requête
    $query = $pdo->prepare($select);
    $query->execute([$username, $password]);
    //recup 1er tuple
    $resultat = $query->fetch();
    {
        if ($resultat != false) {
        echo "Vous êtes bien connectés : $username -- $password";
    } else {
        echo "Identifiants incorrects";
    }
    }
} catch (PDOException $ex) {
    echo "\n$ex\n";
}


// ------------------------------------------SOLUTION ACHREF---------------------------------------
// $name = $_POST['username'];
// $pwd = $_POST['password'];

// $mysql_username = "root";
// $mysql_password = "";
// $mysql_db = "php_pdo";

// // DSN : Data Source Name : URL de connexion
// try {
//     $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
//     // établir la connexion avec MySQL
//     $pdo = new PDO($dsn, $mysql_username, $mysql_password);
//     // chaîne contenant le requête SQL
//     $select = "SELECT * FROM utilisateurs WHERE username = '$name' AND password = '$pwd'";
//     // exécuter la requête SQL
//     $query = $pdo->query($select);
//     // récupérer le premier tuple
//     $resultat = $query->fetch();
//     if ($resultat != false) {
//         echo "Vous êtes bien connectés : $name -- $pwd";
//     } else {
//         echo "Identifiants incorrects";
//     }
// } catch (PDOException $ex) {
//     echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
// }

//gfgfgf' or true !='sqdsq