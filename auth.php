<?php
require_once "db/db.php";
$cookie = '';
if (isset($_COOKIE['login'])) {
    $cookie = $_COOKIE['login'];
}
$user = $pdo->query("SELECT * 
                    FROM users 
                    JOIN posts ON users.id = posts.user_id 
                    WHERE users.email = '$cookie'
                   ")->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="ru">
<?php $titleName = "Вход";
require_once "blocks/head.php" ?>
<body>
<div class="wrap">
    <?php require_once "blocks/header.php" ?>

    <?php if (($_COOKIE['login'] ?? '') == ''): ?>
        <main class="auth container">
            <h2>Авторизация на сайте</h2>
            <form class="auth_form" id="auth">
                <input class=auth_input type="email" name="email" id="email" placeholder="Ваш Email">
                <input class=auth_input type="password" name="pass" id="pass" placeholder="Пароль">
                <div class="error-mess"></div>
                <div class="g-recaptcha" data-sitekey="6LeUhMYqAAAAAEfjZ1tSWcu4ZXvmLZ9GbltA_it8"></div>
                <button class="auth_button" type="submit" id="auth-btn">Авторизоваться</button>
            </form>
        </main>
    <?php else: ?>
    <main class="dashboard container ">
        <div class="dashboard_header">
            <h2 class="dashboard_title">Личный кабинет</h2>
            <span class="dashboard_welcome">Добро пожаловать <b><?= $user[0]['username'] ?></b></span>
            <button class="btn" id="exit_btn">Выйти</button>
        </div>
        <ul class="auth_all-posts">
            <?php
            foreach ($user as $post) {
                echo "<li class='post-list_item'>
                        <p class='all-posts_title'>$post[title]</p>
                        <p>$post[preview]</p>
                        <a href='post.php?id=$post[id]'>Прочесть</a>
                        </li>";
            } ?>
        </ul>
    </main>
    <?php endif ?>

    <?php require_once "blocks/footer.php" ?>
</div>
<script>
    $(document).ready(function () {
        $('#exit_btn').click(function () {
            $.ajax({
                url: 'ajax/exit.php',
                type: 'POST',
                cache: false,
                data: {},
                dataType: 'html',
                success: function (data) {
                    document.location.reload(true);
                }
            })
        })

        $('#auth').on('submit', function (event) {
            event.preventDefault()

            let captcha = grecaptcha.getResponse();

            if (!captcha.length) {
                $(".error-mess").show();
                $(".error-mess").text("Вы не прошли капчу");
            } else {
                $(".error-mess").hide();
                $(".error-mess").text("");

                let email = $('#email').val();
                let pass = $('#pass').val();

                $.ajax({
                    url: 'ajax/auth.php',
                    type: 'POST',
                    cache: false,
                    data: {
                        'email': email,
                        'pass': pass,
                    },
                    dataType: 'html',
                    success: function (data) {
                        if (data === "Done") {
                            $("#auth-btn").text("Готово");
                            $(".error-mess").hide();
                            $('#email').val("");
                            $('#pass').val("");
                            document.location.replace('/auth.php');

                        } else {
                            $(".error-mess").show();
                            $(".error-mess").text(data);

                        }
                    }
                })
            }
        })
    });

</script>
</body>
</html>