<?php

require_once __DIR__ . "/connection.php";

$databaseConnection->query("CREATE TABLE users(id INTEGER AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL, password CHAR(60) NOT NULL)");
$databaseConnection->query("CREATE TABLE computers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(50) NOT NULL,
    year INT NOT NULL,
    cpu VARCHAR(50) NOT NULL
)
");
