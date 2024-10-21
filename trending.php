<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="icons/icons8-ps-controller-64.png">
    <title>Let's Play</title>
</head>
<body>
    <div class="wrapper">
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


        <div class="container trending">
            <h3>Каталог популярных игры</h3>

            <div class="games">
                <?php
                 require_once "lib/db.php";

                 $sql = 'SELECT * FROM trending ORDER BY id DESC ';
                 $query = $pdo->prepare($sql);
                 $query->execute();
                 $games = $query->fetchAll(PDO::FETCH_OBJ);

                 foreach($games as $el)
                    echo '
                         <div class="block">
                <img src="/img/'.$el->image.'" alt="">
                <span><img src="/img/fire.svg" alt=""> '.$el->followers.' Рейтинг</span>
                  </div>';
                ?>

                
                
            </div>
        </div>

        

    <?php require_once "blocks/footer.php"; ?>

    
</body>
</html>