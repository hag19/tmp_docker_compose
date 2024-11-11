<?php

require_once __DIR__ . "/connection.php";

$databaseConnection->query("CREATE TABLE users(id INTEGER AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) NOT NULL, password CHAR(60) NOT NULL)");