<?php
function show_users()
{
    
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "php_pdo";
    $users = [];
    $resultat = "";
    try {
        $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
        $pdo = new PDO($dsn, $mysql_username, $mysql_password);
        $select = "SELECT * FROM utilisateurs";
        $query = $pdo->query($select);
        $users = $query->fetchAll();
        foreach ($users as $key => $value) {
        $resultat .= "<li>\n $value[0] $value[1] $value[2] $value[3]</li>";
    }
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
    
    return $resultat;
    
}