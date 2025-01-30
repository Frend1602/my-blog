<!doctype html>
<html lang="ru">
<?php $titleName = "Вход"; require_once "blocks/head.php"?>
<body>
<div class="wrap">
    <?php require_once "blocks/header.php" ?>
    <main class="auth container">
        <?php if(($_COOKIE['login'] ?? '') == ''):?>
        <h2>Авторизация на сайте</h2>
        <form class="auth_form" id="auth">
            <input class=auth_input type="email" name="email" id="email" placeholder="Ваш Email">
            <input class=auth_input type="password" name="pass" id="pass" placeholder="Пароль">
            <div class="error-mess"></div>
            <div class="g-recaptcha" data-sitekey="6LeUhMYqAAAAAEfjZ1tSWcu4ZXvmLZ9GbltA_it8"></div>
            <button class="auth_button" type="submit" id="auth-btn">Авторизоваться</button>
        </form>
        <?php else: ?>
            <h2><?= $_COOKIE['login'] ?></h2>
            <button class="btn" id="exit_btn">Выйти</button>
        <?php endif ?>
    </main>
    <?php require_once "blocks/footer.php" ?>
</div>
<script>
    $(document).ready(function (){
        $('#exit_btn').click(function (){
            $.ajax({
                url: 'ajax/exit.php',
                type: 'POST',
                cache: false,
                data: {},
                dataType: 'html',
                success: function(data) {
                    document.location.reload(true);
                }
            })
        })

        $('#auth').on('submit',function (event){
            event.preventDefault()

            let captcha = grecaptcha.getResponse();

            if(!captcha.length){
                $(".error-mess").show();
                $(".error-mess").text("Вы не прошли капчу");
            }else {
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
                    success: function(data) {
                        if (data === "Done") {
                            $("#auth-btn").text("Готово");
                            $(".error-mess").hide();
                            $('#email').val("");
                            $('#pass').val("");
                            document.location.replace('/');

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