CREATE DATABASE php_pdo;

USE php_pdo;

CREATE TABLE utilisateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(30) UNIQUE,
    password VARCHAR(255),
    nom VARCHAR(30)
);

INSERT INTO utilisateurs (username, password, nom) VALUES
("Wick", "wick", "John Wick"),
("Dalton", "dalton", "Jack Dalton"),
("Maggio", "maggio", "Maggio Sophie");

SELECT * FROM utilisateurs;