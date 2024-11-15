<?php

require_once __DIR__ . "/../../libraries/response.php";
require_once __DIR__ . "/../../entities/computers/del_c_f.php";

try {
    global $params; // Access the global $params variable.

    $id = $params['id']; // Extract the 'id' from the parameters.
    $response = delComputers($id);

    if ($response) {
        echo jsonResponse(200, [], [
            "success" => true,
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
