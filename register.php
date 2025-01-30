<!doctype html>
<html lang="ru">
<?php $titleName = "Регистрация"; require_once "blocks/head.php"?>
<body>
<div class="wrap">
<?php require_once "blocks/header.php" ?>
<main class="register container">
    <h2>Регистрация на сайте</h2>
    <form class="register_form" id="reg-form">
        <input class=register_input type="text" name="username" id="username" placeholder="Полное имя">
        <input class=register_input type="email" name="email" id="email" placeholder="Ваш Email">
        <input class=register_input type="password" name="pass" id="pass" placeholder="Пароль">
        <input class=register_input type="password" name="repass" id="repass" placeholder="Повторите пароль">
        <div class="error-mess"></div>
        <div class="g-recaptcha" data-sitekey="6LeUhMYqAAAAAEfjZ1tSWcu4ZXvmLZ9GbltA_it8"></div>
        <button class="register_button" type="submit" id="reg-btn">Зарегистрироваться</button>
    </form>
</main>
<?php require_once "blocks/footer.php" ?>
</div>
<script>
    $(document).ready(function (){

        $('#reg-form').on('submit',function (event){
            event.preventDefault()

            let captcha = grecaptcha.getResponse();

            if(!captcha.length){
                $(".error-mess").show();
                $(".error-mess").text("Вы не прошли капчу");
            }else {
                $(".error-mess").hide();
                $(".error-mess").text("");

                let name = $('#username').val();
                let email = $('#email').val();
                let pass = $('#pass').val();
                let repass = $('#repass').val();


                $.ajax({
                        url: 'ajax/register.php',
                        type: 'POST',
                        cache: false,
                        data: {
                            'username': name,
                            'email': email,
                            'pass': pass,
                            'repass': repass,
                        },
                        dataType: 'html',
                        success: function(data) {
                            if (data === "Done") {
                                $("#reg-btn").text("Вы успешно зарегистрировались");
                                $(".error-mess").hide();
                                $('#username').val("");
                                $('#email').val("");
                                $('#pass').val("");
                                $('#repass').val("");
                                grecaptcha.reset();
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