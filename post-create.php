<?php
if ($_COOKIE['login'] == '') {
    header('Location: /reg.php');
    exit();
}
?>

<!doctype html>
<html lang="ru">
<?php $titleName = "Добавление статьи"; require_once "blocks/head.php"?>
<body>
<div class="wrap">
    <?php require_once "blocks/header.php" ?>
    <main class="post container">
        <h2>Добавление статьи</h2>
        <form class="post_form" id="post-form" method="post" action="ajax/add-post.php" enctype="multipart/form-data">
            <input class=post_input type="text" name="title" id="title" placeholder="Заголовок статьи">
            <input class=post_input type="text" name="preview" id="preview" placeholder="Анонс статьи">
            <textarea class=post_input name="text" id="text" placeholder="Основной текст"></textarea>
            <input type="file" name="file">
            <div class="error-mess"></div>
            <button class="register_button" type="submit" id="reg-btn">Опубликовать</button>
        </form>
    </main>
    <?php require_once "blocks/footer.php" ?>
</div>
</body>
</html>
