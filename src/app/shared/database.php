<?php

session_start();

include_once "../../vendor/autoload.php";

$google_client_id = getenv('GOOGLE_CLIENT_ID');
$google_client_secret = getenv('GOOGLE_CLIENT_SECRET');
$google_client_redirect_uri = getenv('GOOGLE_CLIENT_REDIRECT_URI');
$db_host = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');
$db_name = getenv('DB_NAME');

$google_client = new Google_Client();
$google_client->setClientId($google_client_id);
$google_client->setClientSecret($google_client_secret);
$google_client->setRedirectUri($google_client_redirect_uri);
$google_client->addScope('email');
$google_client->addScope('profile');

if (isset($_GET["code"])) {
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if (!isset($token["error"])) {
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token'] = $token['access_token'];
        $google_service = new Google_Service_Oauth2($google_client);
        $data = $google_service->userinfo->get();

        $_SESSION['username'] = $data['given_name'];
    }
}

if (!$db_host || !$db_user || !$db_pass || !$db_name) {
    die("Missing environment variables for database configuration.");
}

define('DB_HOST', $db_host);
define('DB_USER', $db_user);
define('DB_PASS', $db_pass);
define('DB_NAME', $db_name);

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    echo(DB_HOST), '</br>';
    echo(DB_USER), '</br>';
    echo(DB_PASS), '</br>';
    echo(DB_NAME);
    die('Connection Failed ' . $conn->connect_error);
}