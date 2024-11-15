<?php

require_once __DIR__ . "/../../libraries/response.php";
require_once __DIR__ . "/../../entities/computers/get_c.php";

try {
    $computers = getComputers();

    echo jsonResponse(200, [], [
        "success" => true,
        "computers" => $computers
    ]);
} catch (Exception $exception) {
    echo jsonResponse(500, [], [
        "error" => $exception->getMessage()
    ]);
}
