<header class="header">
    <span class="header__name"><a href="/src/app/main/main.php" class="header__link">IWNIL</a></span>

    <?php if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin'): ?>
        <ul class="header__list">
            <li class="header__elem"><a href="/src/app/admin/all-users.php" class="header__link">Admin</a></li>
            <li class="header__elem"><a href="/src/app/portfolio/portfolio.php" class="header__link">Portfolio</a></li>
            <li class="header__elem"><a href="/src/app/auth/logout.php" class="header__link">Logout</a></li>
        </ul>
    <?php else: ?>
        <ul class="header__list">
            <li class="header__elem"><a href="/src/app/main/main.php" class="header__link">Home</a></li>
            <li class="header__elem"><a href="/src/app/about/about.php" class="header__link">About</a></li>
            <li class="header__elem"><a href="/src/app/portfolio/portfolio.php" class="header__link">Portfolio</a></li>
            <li class="header__elem"><a href="/src/app/reviews/reviews.php" class="header__link">Reviews</a></li>
            <?php if (!isset($_SESSION['username'])): ?>
                <li class="header__elem"><a href="/src/app/auth/sign-in.php" class="header__link">Sign in</a></li>
            <?php else: ?>
                <li class="header__elem"><a href="/src/app/auth/logout.php" class="header__link">Logout</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>

    <?php if (isset($_SESSION['username'])): ?>
        <span class="header__name"><?= $_SESSION['username'] ?></span>
    <?php endif; ?>
</header>
