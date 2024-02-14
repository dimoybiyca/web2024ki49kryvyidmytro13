<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: /src/app/main/main.php");
    exit;
}
?>
<?php require '../shared/modules/head_tad.php'; ?>
<div class="block">
    <?php require '../shared/modules/header.php'; ?>

    <h1 class="all-users__header">All Users</h1>
    <div class="all-users__search">
        <label class="all-users__label" for="searchInput">Input</label>
        <input class="all-users__input" type="text" id="searchInput" placeholder="Search by username">
        <button class="all-users__btn" onclick="searchUsers()">Search</button>
    </div>

    <div class="users__list" id="userList"></div>

    <script>
        function searchUsers() {
            const searchTerm = document.getElementById('searchInput').value;

            const xhr = new XMLHttpRequest();
            xhr.open('GET', '/src/app/admin/get-all-users.php?search=' + searchTerm, true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    const users = JSON.parse(xhr.responseText);
                    const userListDiv = document.getElementById('userList');
                    userListDiv.innerHTML = '';
                    users.forEach(function (user) {
                        let userDiv = document.createElement("div")
                        userDiv.classList.add('user')

                        let userAvatar = document.createElement("span")
                        userAvatar.classList.add('user__avatar')
                        userAvatar.innerText = user.username.charAt(0).toUpperCase()

                        let userName = document.createElement("span")
                        userName.classList.add('user__name')
                        userName.innerText = user.username

                        let userDate = document.createElement("span")
                        userDate.classList.add('user__date')
                        userDate.innerText = user['created_at']

                        userDiv.appendChild(userAvatar)
                        userDiv.appendChild(userName)
                        userDiv.appendChild(userDate)

                        userListDiv.appendChild(userDiv);
                    });
                } else {
                    console.error('Failed to fetch user data');
                }
            };
            xhr.send();
        }
    </script>
</div>
<?php require '../shared/modules/closing_html_tag.php'; ?>
