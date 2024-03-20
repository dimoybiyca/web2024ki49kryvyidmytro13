<?php global $conn; ?>
<?php
session_start();
include '../shared/database.php';
$projectsPerPage = 1;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$offset = ($page - 1) * $projectsPerPage;

$sql = "SELECT * FROM web.portfolio_projects LIMIT $offset, $projectsPerPage";
$result = mysqli_query($conn, $sql);
$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sqlCount = "SELECT COUNT(*) AS total FROM web.portfolio_projects";
$resultCount = mysqli_query($conn, $sqlCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalProjects = $rowCount['total'];
$totalPages = ceil($totalProjects / $projectsPerPage);

$prevPage = ($page > 1) ? $page - 1 : null;
$nextPage = ($page < $totalPages) ? $page + 1 : null;
?>

<?php
$projectImages = ['project1.webp', 'project2.webp', 'project3.webp', 'project4.webp', 'architecture.webp', 'keyboard.webp', 'nft.webp'];
$randomIndex = array_rand($projectImages);
$randomImage = $projectImages[$randomIndex];
?>

<?php require '../shared/modules/head_tad.php'; ?>
    <div class="block">
        <?php require '../shared/modules/header.php'; ?>

        <?php if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin'): ?>
            <div class="admin-buttons">
                <a href="/src/app/portfolio/add-project.php" class="portfolio__link">Add Project</a>
            </div>
        <?php endif; ?>

        <h1 class="portfolio__header">Portfolio</h1>

        <div class="mprojects">
            <?php foreach ($projects as $project): ?>
                <div class="mproject">
                    <img class="mproject__img" src="/src/assets/img/<?php echo $randomImage; ?>" alt="project">
                    <div class="mproject__details">
                        <h2 class="mproject__name"><?= $project['project_name']; ?></h2>
                        <p class="mproject__description"><?= $project['description']; ?></p>
                        <p class="mproject__stack"><?= $project['technologies']; ?></p>
                        <button class="mproject__btn">More</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pagination">
            <?php if ($prevPage !== null): ?>
                <a href="?page=<?= $prevPage ?>" class="pagination__previous">Previous</a>
            <?php endif; ?>
            <?php if ($nextPage !== null): ?>
                <a href="?page=<?= $nextPage ?>" class="pagination__next">Next</a>
            <?php endif; ?>
        </div>

        <?php require '../shared/modules/footer.php'; ?>
    </div>

<?php require '../shared/modules/closing_html_tag.php'; ?>