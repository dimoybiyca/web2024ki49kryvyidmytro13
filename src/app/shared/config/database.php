<?php
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

if (!$db_host || !$db_user || !$db_pass || !$db_name) {
    die("Missing environment variables for database configuration.");
}

define('DB_HOST', $db_host);
define('DB_USER', $db_user);
define('DB_PASS', $db_pass);
define('DB_NAME', $db_name);

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    echo(DB_HOST), '</br>';
    echo(DB_USER), '</br>';
    echo(DB_PASS), '</br>';
    echo(DB_NAME);
    die('Connection Failed ' . $conn->connect_error);
}