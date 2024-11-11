<?php
echo "en cours";
require_once __DIR__ . "/libraries/path.php";
require_once __DIR__ . "/libraries/method.php";

if (isPath("users")) {
    if (isGetMethod()) {
        require_once __DIR__ . "/routes/users/get.php";
    }
}
