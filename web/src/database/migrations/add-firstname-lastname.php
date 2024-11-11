<?php

require_once __DIR__ . "/../database/connection.php";

$databaseConnection->query("ALTER TABLE users ADD COLUMN firstname VARCHAR(50) NOT NULL;");
$databaseConnection->query("ALTER TABLE users ADD COLUMN lastname VARCHAR(50) NOT NULL;");