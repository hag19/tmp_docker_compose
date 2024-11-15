<?php

require_once __DIR__ . "/../../libraries/response.php";
require_once __DIR__ . "/../../entities/computers/get_c_id_f.php";

try {
    global $params; // Access the global $params variable.

    $id = $params['id']; // Extract the 'id' from the parameters.
    $computer = getComputers($id);

    if ($computer) {
        echo jsonResponse(200, [], [
            "success" => true,
            "computer" => $computer
        ]);
    } else {
        echo jsonResponse(404, [], [
            "success" => false,
            "error" => "Computer not found"
        ]);
    }
} catch (Exception $exception) {
    echo jsonResponse(500, [], [
        "error" => $exception->getMessage()
    ]);
}
