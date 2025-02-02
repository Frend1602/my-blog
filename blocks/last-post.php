<?php
require_once "db/db.php";

$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 1";
$query = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$post =  $query[0];
echo " 
 <div class='last-post'>
 <h3>Последний пост</h3>
 <div class='last-post_block'>
    <img src='$post[img]' alt=''>
    <p class='last-post_title'>$post[title]</p>
    <p class='last-post_intro'>$post[preview]</p>
    <a href='' class='last-post_btn btn'>Прочитать</a>
</div>
</div>
 ";


