<?php
function get_connection()
{
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_db = "php_pdo";


    $dsn = "mysql:host=localhost;port=3306;dbname=$mysql_db;charset=utf8";
    $pdo = new PDO($dsn, $mysql_username, $mysql_password);
    return $pdo;
}
