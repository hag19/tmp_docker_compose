<?php

function getComputers($id) {
    require_once __DIR__ . "/../../database/connection.php";

    $getCQuery = $pdo->prepare("SELECT id, brand, year, cpu FROM computers WHERE id = ?");
    $getCQuery->execute([$id]);
    $computer = $getCQuery->fetch(PDO::FETCH_ASSOC); // Use `fetch` for a single result.
    return $computer;
}
