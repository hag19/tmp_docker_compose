<?php

function postComputers($brand, $year, $cpu) {
    require_once __DIR__ . "/../../database/connection.php";
if (empty($brand) || empty($year) || empty($cpu)) {
        return false;
    }
    if(!is_numeric($year)) {
        return false;
    }
    if(!is_string($brand) || !is_string($cpu)) {
        return false;
    }
    if(strlen($brand) > 50 || strlen($cpu) > 50) {
        return false;
    }//verifay if it match the condition
    $getCQuery = $pdo->prepare("INSERT into computers (brand, year, cpu) values (?, ?, ?)");
    $getCQuery->execute([$brand, $year, $cpu]);
    $response = $getCQuery->fetch(PDO::FETCH_ASSOC);
    return $response;
}