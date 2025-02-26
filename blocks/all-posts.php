<?php
require_once "db/db.php";

$sql = "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC";
$query = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<div class='all-posts'>
    <h3 class=''>Все посты</h3>
    <ul>
        <?php foreach ($query as $post): ?>
            <li class='post-list_item'>
                <div class='info'>
                    <span class='info_author'>By
                        <span class='author_name'><?= $post['username'] ?></span></span>
                    <span class='info_date'><?= $post['time_create'] ?></span>
                </div>
                <p class='all-posts_title'><?= $post['title'] ?></p>
                <a class="btn main-post-btn" href="post.php?id=<?= $post['id'] ?>">Прочесть</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


