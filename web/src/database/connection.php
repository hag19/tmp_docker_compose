<?php
$db_host = getenv('db_host');
$db_name = getenv('db_name');
$db_user = getenv('db_user');
$db_password = getenv('db_password');

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
