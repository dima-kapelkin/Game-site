<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="icons/icons8-ps-controller-64.png">
</head>

<body>
<?php require_once "blocks/header.php"; ?>

<div class="burger">
            <img src="icons/icons8-меню-50.png">
            <ul class="burger-submenu">
              <li><a href="/">Главная</a></li>
              <li><a href="about.php">Новости</a></li>
              <li><a href="gallery.php">Галерея</a></li>
              <li><a href="reg.php">Регистрация</a></li>
              <li><a href="auth.php">Авторизация</a></li>
              <li><a href="contacts.php">О нас</a></li>
            </ul>
        </div>

    

    <div class="feedback">
        <div class="container">
            <h2>Регистрация</h2>
    

            <form method="post" action="/lib/reg.php">
                <div class="inline">
                    <div>
                        <label>Логин</label>
                        <input type="text" name="login">
                    </div>
                    <div>
                        <label>Имя</label>
                        <input type="text" name="username">
                    </div>
                </div>
                <label>Email</label>
                <input type="email" class="one-line" name="email">

                <label>Пароль</label>
                <input type="password" class="one-line" name="password">

                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>