<?php
require_once __DIR__ . "/libraries/path.php";
require_once __DIR__ . "/libraries/method.php";

$params = []; // Declare the params array to store route parameters.

if (isPath("users")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/users/get.php";
    }
}

if (isPath("computers", $params)) { // Pass $params to capture :data for post method
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/computers/get_comp.php";
    }
    if (isPostMethod()) {
        require_once __DIR__ . "/routes/computers/post_c.php";
    }
}

if (isPath("computers/:id", $params)) { // Pass $params to capture :id
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/computers/get_c_id.php";
    }
    if (isDeleteMethod()) {
        require_once __DIR__ . "/routes/computers/del_c.php";
    }
}
