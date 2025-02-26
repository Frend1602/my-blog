<?php
require_once "db/db.php";

$sql = "SELECT * FROM posts INNER JOIN users ON posts.user_id = users.id WHERE posts.id = ?";
$query = $pdo->prepare($sql);
$query->execute([$_GET["id"]]);
$post = $query->fetch(PDO::FETCH_ASSOC);

if ($_COOKIE['login'] !== $post['email']) {
    header('Location: /');
    exit();
}
?>

<!doctype html>
<html lang="ru">
<?php $titleName = "Редактирование статьи"; require_once "blocks/head.php"?>
<body>
<div class="wrap">
    <?php require_once "blocks/header.php" ?>
    <main class="post container">
        <h2>Редактирование статьи</h2>
        <form class="post_form" id="post-form" method="post" action="ajax/update-post.php" enctype="multipart/form-data">
            <input name="id" type="hidden" value="<?=$_GET['id'] ?>">
            <input name="imgPath" type="hidden" value="<?=$post['img'] ?>">
            <input class=post_input type="text" name="title" id="title" placeholder="Заголовок статьи" value="<?=$post['title'] ?>">
            <input class=post_input type="text" name="preview" id="preview" placeholder="Анонс статьи" value="<?=$post['preview'] ?>">
            <textarea class=post_input name="text" id="text" placeholder="Основной текст"><?=$post['text'] ?></textarea>
            <input type="file" name="file">
            <div class="error-mess"></div>
            <button class="register_button" type="submit" id="reg-btn">Редактировать</button>
        </form>
    </main>
    <?php require_once "blocks/footer.php" ?>
</div>
</body>
</html>
