<?php global $conn; ?>
<?php
session_start();
require '../shared/database.php';

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    http_response_code(403);
    exit("Access denied");
}

$searchResults = array();

if (!empty($_GET['search'])) {
    $searchTerm = $_GET['search'];

    $sql = "SELECT * FROM web.users WHERE username LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row;
    }
}

echo json_encode($searchResults);
?>
