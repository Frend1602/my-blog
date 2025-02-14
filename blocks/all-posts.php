<?php
require_once "db/db.php";

$sql = "SELECT * FROM posts ORDER BY id DESC";
$query = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo "<div class='all-posts'><h3 class=''>Все посты</h3><ul>";

foreach ($query as $post) {
    echo "<li class='post-list_item'>
          <div class='info'>
            <span class='info_author'>By <span class='author_name'>John Deo</span></span>
            <span class='info_date'>Aug 23, 2021</span>
          </div>
          <p class='all-posts_title'>$post[title]</p><a href='post.php?id=$post[id]'>Прочесть</a></li>";
}
echo "</ul></div>";


