<?php

function delComputers($id) {
    require_once __DIR__ . "/../../database/connection.php";

    $stmt = $db->prepare('DELETE FROM computers WHERE id = ?');
    $stmt->execute([$id]);

    $response = $stmt->fetch(PDO::FETCH_ASSOC);

    return $response;
}