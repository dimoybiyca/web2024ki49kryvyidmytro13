<?php global $conn; ?>
<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: /src/app/main/main.php");
    exit;
}

include '../shared/config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectName = $_POST['project_name'];
    $description = $_POST['description'];
    $technologies = $_POST['technologies'];

    $sql = "INSERT INTO web.portfolio_projects (project_name, description, technologies) VALUES ('$projectName', '$description', '$technologies')";
    if (mysqli_query($conn, $sql)) {
        $message = "Project added successfully!";
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>
<?php require '../shared/modules/head_tad.php'; ?>
    <div class="block">
        <?php require '../shared/modules/header.php'; ?>
        <div class="add-project">
            <h1 class="portfolio__header">Add Project</h1>

            <?php if (isset($message)): ?>
                <div class="success"><?php echo $message; ?></div>
            <?php endif; ?>

            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="post">
                <div class="form-group">
                    <label for="project_name">Project Name:</label>
                    <input class="add-project__input" type="text" id="project_name" name="project_name" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="add-project__textarea" rows="10" id="description" name="description"
                              required></textarea>
                </div>
                <div class="form-group">
                    <label for="technologies">Technologies:</label>
                    <input class="add-project__input" type="text" id="technologies" name="technologies" required>
                </div>

                <div class="add-project__control">
                    <button class="add-project__btn" type="submit">Add Project</button>
                </div>
            </form>
        </div>

        <?php require '../shared/modules/footer.php'; ?>
    </div>

<?php require '../shared/modules/closing_html_tag.php'; ?>