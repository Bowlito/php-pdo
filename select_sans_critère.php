<?php

$mysql_username = "root";
$mysql_password = "";
$mysql_db = "php_pdo";

// DSN : Data Source Name : URL de connexion
try {
    $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
    // Etablir la connexion avec MySQL
    $pdo = new PDO($dsn, $mysql_username, $mysql_password);
    // chaîne contenant la requête SQL
    $select = "SELECT * FROM utilisateurs";
    // Pour exécuter le SQL
    $query = $pdo->query($select);

    //Récupérer le 1er tuple
    $resultat = $query->fetch();
    
    echo "\n$resultat[0] $resultat[1] $resultat[2] $resultat[3]";

    //Cibler avec le nom du champs

    echo "\n" . $resultat['id']. "";
    

    //Récupérer tous les tuples de la table

    $resultat = $query->fetchAll();
    foreach ($resultat as $key => $value) {
        echo "\n $value[0] $value[1] $value[2] $value[3]";
    }
} catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la BDD\n" . $ex->getMessage();
}
