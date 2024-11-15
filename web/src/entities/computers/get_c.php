<?php

function getComputers() {
    require_once __DIR__ . "/../../database/connection.php";

    $getCQuery = $pdo->prepare("SELECT id, brand, year,cpu");
    $getCQuery->execute();
    $computer = $getCQuery->fetchAll(PDO::FETCH_ASSOC);

    return $computer;
}