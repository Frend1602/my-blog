<?php
require_once "db/db.php";

$sql = "SELECT * FROM posts WHERE id = ?";
$query = $pdo->prepare($sql);
$query->execute([$_GET["id"]]);
$post = $query->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="ru">
<?php $titleName = $post['title'];
require_once "blocks/head.php" ?>
<body>
<div class="wrap">
    <?php require_once "blocks/header.php" ?>
    <main>
        <section class=" container">
            <h3><?= $titleName = $post['title']; ?></h3>
            <img src='<?= $post['img'] ?>' alt=''>
            <p class="text"><?= $post['text'] ?></p>
        </section>
    </main>
    <?php require_once "blocks/footer.php" ?>
</body>
</div>
</html>

