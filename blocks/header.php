<header class="header container">
    <a href="/index.php" class="logo"><img src="../img/Logo.svg" alt="Логотип сайта"></a>
    <nav>
        <ul class="nav-list">
            <?php if(($_COOKIE['login'] ?? '') ==''): ?>
            <li><a class="nav-link" href="auth.php">Вход</a></li>
            <li><a class="nav-link" href="register.php">Регистрация</a></li>
                <li><a class="nav-link" href="index.php">Главная</a></li>
            <?php else: ?>
                <li><a class="nav-link" href="auth.php">Кабинет</a></li>
                <li><a class="nav-link" href="index.php">Главная</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>
