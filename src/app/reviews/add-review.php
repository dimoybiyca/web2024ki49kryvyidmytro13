<?php global $conn; ?>
<?php
ob_start();
session_start();
include '../shared/config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $review = $_POST['review'];
    $rating = $_POST['rating'];

    $username = $_SESSION['username'];

    $sql = "INSERT INTO web.reviews (username, review, is_positive) VALUES ('$username', '$review', " . ($rating == 'positive' ? 'TRUE' : 'FALSE') . ")";

    if (mysqli_query($conn, $sql)) {
        header("Location: /src/app/reviews/reviews.php");
        exit;
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}

header("Location: /src/app/main/main.php");
exit;
?>
