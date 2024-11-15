<?php

require_once __DIR__ . "/../../libraries/response.php";
require_once __DIR__ . "/../../entities/computers/post_c_f.php";

try {
    global $params; // Access the global $params variable.

    $brand = $params['brand']; // Extract the 'brand' from the parameters.
    $year = $params['year']; // Extract the 'year' from the parameters.
    $cpu = $params['cpu']; // Extract the 'cpu' from the parameters.
    $response = postComputers($brand, $year, $cpu);

    if ($response) {
        echo jsonResponse(200, [], [
            "success" => true,
        ]);
    } else {
        echo jsonResponse(404, [], [
            "success" => false,
            "error" => "invalid data"
        ]);
    }
} catch (Exception $exception) {
    echo jsonResponse(500, [], [
        "error" => $exception->getMessage()
    ]);
}
