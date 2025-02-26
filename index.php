<!doctype html>
<html lang="ru">
<?php $titleName = "Блог";
require_once "blocks/head.php" ?>

<body>
    <div class="wrap">
        <?php require_once "blocks/header.php" ?>
        <main>
            <h1 hidden>Blog startup</h1>
            <section class="posts container">
                <?php require_once "blocks/last-post.php" ?>
                <?php require_once "blocks/all-posts.php" ?>
            </section>
        </main>
        <?php require_once "blocks/footer.php" ?>
    </div>
</body>

</html>