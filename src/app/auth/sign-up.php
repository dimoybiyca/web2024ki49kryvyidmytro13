<?php global $conn; ?>
<?php
ob_start();
session_start();
include '../shared/config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO web.users (username, password) VALUES ('$username', '$hashedPassword')";
    if (mysqli_query($conn, $sql)) {
        session_write_close();
        header("Location: /src/app/auth/sign-in.php");
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>
<?php require '../shared/modules/head_tad.php'; ?>
    <div class="block">
        <?php require '../shared/modules/header.php'; ?>

        <div class="login">
            <h1 class="login__header">Sign up</h1>

            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="login__input" type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="login__input" type="password" id="password" name="password" required>
                </div>
                <button class="login__btn" type="submit">Register</button>
            </form>
        </div>
        <a href="/src/app/auth/sign-in.php" class="login__link">Already have account</a>

        <div class="login__footer">
            <?php require '../shared/modules/copyright.php'; ?>
        </div>
    </div>

<?php require '../shared/modules/closing_html_tag.php'; ?>