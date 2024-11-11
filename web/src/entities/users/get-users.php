<?php

function getUsers() {
    require_once __DIR__ . "/../../database/connection.php";

    $getUsersQuery = $databaseConnection->query("SELECT id, email, password FROM users;");

    $users = $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}