<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: /src/app/auth/sign-in.php");
exit;