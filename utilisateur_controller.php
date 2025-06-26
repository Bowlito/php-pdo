<?php


if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $new_user = "";
    $new_pwd = "";
    $new_name = "";
} else {


    $new_user = $_POST['add_username'];
    $new_pwd = $_POST['add_pwd'];
    $new_name = $_POST['add_name'];


    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "php_pdo";
    if ($new_user != "" or $new_pwd != "" or $new_namer = "") {
        try {
            $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
            $pdo = new PDO($dsn, $mysql_username, $mysql_password);
            $insert = "INSERT INTO utilisateurs(username, password, nom) VALUES (:new_usr, :new_pwd, :new_name) ";
            $query = $pdo->prepare($insert);
            $query->bindValue(":new_usr", $new_user);
            $query->bindValue(":new_pwd", $new_pwd);
            $query->bindValue(":new_name", $new_name);
            $query->execute();
        } catch (PDOException $ex) {
            echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
        }
    }
}
    

//solution avec un marqueur nominatif
// $name = $_POST['username'];
// $pwd = $_POST['password'];

// $mysql_username = "root";
// $mysql_password = "";
// $mysql_db = "php_pdo";

// try {
//     $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
//     $pdo = new PDO($dsn, $mysql_username, $mysql_password);
//     $select = "SELECT * FROM utilisateurs WHERE username = :name AND password = :pwd";
//     echo "<br>$select<br>";
//     $query = $pdo->prepare($select);
//     $query->bindValue(":name", $name);
//     $query->bindValue(":pwd", $pwd);
//     $query->execute();
//     $resultat = $query->fetch();
//     if ($resultat != false) {
//         echo "Vous êtes bien connectés : $name -- $pwd";
//     } else {
//         echo "Identifiants incorrects";
//     }
// } catch (PDOException $ex) {
//     echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
// }
// // solution avec les fonctions de transformation : htmlentities
// $name = $_POST['username'];
// $pwd = $_POST['password'];

// $mysql_username = "root";
// $mysql_password = "";
// $mysql_db = "php_pdo";

// try {
//     $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
//     $pdo = new PDO($dsn, $mysql_username, $mysql_password);
//     // Injection SQL avec gfghfgf' or true !='sqdsq
//     $select = "SELECT * FROM utilisateurs WHERE username = '" .  htmlentities($name) . "'  AND password = '" . htmlentities($pwd) ."'";
//     $query = $pdo->query($select);
//     $resultat = $query->fetch();
//     if ($resultat != false) {
//         echo "Vous êtes bien connectés : $name -- $pwd";
//     } else {
//         echo "Identifiants incorrects";
//     }

// } catch (PDOException $ex) {
//     echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
// }
// Solution avec le marqueur ?
// $name = $_POST['username'];
// $pwd = $_POST['password'];

// $mysql_username = "root";
// $mysql_password = "";
// $mysql_db = "php_pdo";

// try {
//     $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
//     $pdo = new PDO($dsn, $mysql_username, $mysql_password);
//     $select = "SELECT * FROM utilisateurs WHERE username = ? AND password = ?";
//     echo "<br>$select<br>";
//     $query = $pdo->prepare($select);
//     $query->execute([$name, $pwd]);
//     $resultat = $query->fetch();
//     if ($resultat != false) {
//         echo "Vous êtes bien connectés : $name -- $pwd";
//     } else {
//         echo "Identifiants incorrects";
//     }
// } catch (PDOException $ex) {
//     echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
// }

// Solution sans requête préparée
// $name = $_POST['username'];
// $pwd = $_POST['password'];

// $mysql_username = "root";
// $mysql_password = "";
// $mysql_db = "php_pdo";

// try {
//     $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
//     $pdo = new PDO($dsn, $mysql_username, $mysql_password);
//     // Injection SQL
//     $select = "SELECT * FROM utilisateurs WHERE username = '$name' AND password = '$pwd'";

//     $query = $pdo->query($select);
//     $resultat = $query->fetch();
//     if ($resultat != false) {
//         echo "Vous êtes bien connectés : $name -- $pwd";
//     } else {
//         echo "Identifiants incorrects";
//     }
// } catch (PDOException $ex) {
//     echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
// }
