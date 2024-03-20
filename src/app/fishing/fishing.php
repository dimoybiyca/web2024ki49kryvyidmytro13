<?php global $conn; ?>
<?php
ob_start();
session_start();
include '../shared/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO web.fishing (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        session_write_close();
        header("Location: /src/app/auth/sign-in.php");
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>
<?php require '../shared/modules/head_tad.php'; ?>
    <div class="disclaimer">WARNING! Only for demonstration. Do NOT enter your real data it is UNSAFE</div>
    <div class="block">
        <?php require '../shared/modules/header.php'; ?>
        <div class="login">
            <h1 class="login__header">Sign in</h1>

            <?php if (isset($message)): ?>
                <div class="success"><?php echo $message; ?></div>
            <?php endif; ?>

            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input class="login__input" type="text" id="username" name="username" placeholder="username"
                           required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="login__input" type="password" id="password" name="password" placeholder="password"
                           required>
                </div>
                <button class="login__btn" type="submit">Login</button>
            </form>

            <a class="google__btn" href="/src/app/auth/sign-in.php">
                <img src="/src/assets/icons/google.svg" alt="G"/>
                <span>Sign in with Google</span>
            </a>
        </div>
        <a href="/src/app/auth/sign-up.php" class="login__link">Create account</a>

        <div class="login__footer">
            <?php require '../shared/modules/copyright.php'; ?>
        </div>
    </div>

<?php require '../shared/modules/closing_html_tag.php'; ?>