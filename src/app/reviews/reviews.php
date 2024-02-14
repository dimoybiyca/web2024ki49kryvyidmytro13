<?php global $conn; ?>
<?php
session_start();
include '../shared/config/database.php';
?>

<?php require '../shared/modules/head_tad.php'; ?>
    <div class="block">
        <?php require '../shared/modules/header.php'; ?>

        <?php if (isset($_SESSION['username'])): ?>
            <div class="admin-buttons">
                <button onclick="openModal()" class="portfolio__link">Add Review</button>
            </div>
        <?php else: ?>
            <div class="reviews__disclaimer">Sign in to add a review</div>
        <?php endif; ?>

        <h1 class="reviews__header">Reviews</h1>

        <div class="reviews">
            <?php
            $sql = "SELECT * FROM web.reviews";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $reviewClass = $row['is_positive'] ? 'positive-review' : 'negative-review';

                    echo '<div class="review ' . $reviewClass . '">';
                    echo '<span class="review__avatar">' . strtoupper(substr($row['username'], 0, 1)) . '</span>';
                    echo '<div class="review__content">';
                    echo '<p class="review__user">' . $row['username'] . '</p>';
                    echo '<p class="review__text">' . $row['review'] . '</p>';
                    echo '</div>';
                    echo '<p class="review__date">' . $row['created_at'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p class="no-reviews">No reviews available.</p>';
            }
            ?>
        </div>

        <?php require '../shared/modules/footer.php'; ?>
    </div>

    <div id="myModal" class="modal">
        <div class="modal__wrapper">
            <div class="modal-content">
                <button class="close" onclick="closeModal()">&times;</button>
                <form class="modal__form" action="/src/app/reviews/add-review.php" method="post">
                    <div class="form-group">
                        <label for="review">Review:</label>
                        <textarea class="modal__textarea" id="review" name="review" rows="8" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <select id="rating" name="rating" required>
                            <option value="positive">Positive</option>
                            <option value="negative">Negative</option>
                        </select>
                    </div>
                    <button class="modal__btn" type="submit">Submit Review</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
<?php require '../shared/modules/closing_html_tag.php'; ?>