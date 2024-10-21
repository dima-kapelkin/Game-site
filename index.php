<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="icons/icons8-ps-controller-64.png">
    <script src="js/script.js"></script>
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


        <div class="slider-container">
            <h1>Надо жить играя. (Платон).</h1>
            <h2>Галерея популярных игр</h2>
            <div class="all">
                <input checked type="radio" name="respond" id="desktop">
                    <article id="slider">
                            <input checked type="radio" name="slider" id="switch1">
                            <input type="radio" name="slider" id="switch2">
                            <input type="radio" name="slider" id="switch3">
                            <input type="radio" name="slider" id="switch4">
                            <input type="radio" name="slider" id="switch5">
                        <div id="slides">
                            <div id="overflow">
                                <div class="image">
                                    <article><img src="slide/doom.jpg"></article>
                                    <article><img src="slide/442d5526.jpeg"></article>
                                    <article><img src="slide/gta.jpg"></article>
                                    <article><img src="slide/6.jpg"></article>
                                    <article><img src="slide/loa.jpeg"></article>
                                </div>
                            </div>
                        </div>
                        <div id="controls">
                            <label for="switch1"></label>
                            <label for="switch2"></label>
                            <label for="switch3"></label>
                            <label for="switch4"></label>
                            <label for="switch5"></label>
                        </div>
                        <div id="active">
                            <label for="switch1"></label>
                            <label for="switch2"></label>
                            <label for="switch3"></label>
                            <label for="switch4"></label>
                            <label for="switch5"></label>
                        </div>
                    </article>
            </div>
            
            
        </div>

        <div class="container trending">
        <a href="/trending.php" class="btn1">Больше игр</a>
            <h3>Популярные игры</h3>

            <div class="games">
                <?php
                 require_once "lib/db.php";

                 $sql = 'SELECT * FROM trending ORDER BY id  LIMIT 4';
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

        <div class="container big-text">
            <p>Рассказываем вам о видеоиграх</p>
        </div>

        <div class="container banner">
            <h3>Для ПК-версии God of War Ragnarok вышло 5-е обновление с исправлениями объемного тумана, достижений и другим</h3>
            <p>Jetpack Interactive выпустила обновление ПК-версии God of War Ragnarok от 4 октября. Патч №5 направлен на исправление объёмного тумана на видеокартах NVIDIA, неразблокируемых достижений и на предотвращение сбоев при загрузке игры.</p>
            <img src="img/ragnar.jpg" alt="">
        </div>
    </div>

    <div class="features">
        <div class="container">
            <h3>Unreal Engine 5 Lumen теперь работает на скорости 60 к/с на PS5, Epic Games стремится к 120 к/c
                monk70
                monk70</h3>
            <p>Технология освещения Lumen, представленная в Unreal Engine 5, теперь может работать на скорости 60 кадров в секунду на PS5, хотя Epic Games стремится оптимизировать ее еще больше, чтобы достичь 120 кадров в секунду.

                Во время Epic Games Unreal Fest 2024 в Сиэтле было объявлено, что с обновлением 5.5 Unreal Engine теперь может работать с высококачественной Lumen и аппаратной трассировкой лучей на скорости 60 кадров в секунду на PS5 и, соответственно, на Xbox Series X. Lumen нацелена на время рендеринга менее 2 мс. Epic Games стремится сделать ее более масштабируемой в будущем, с дальнейшей оптимизацией, направленной на то, чтобы технология рендеринга достигла скорости 120 кадров в секунду на консолях текущего поколения.</p>
            <div class="info">
                <div class="block">
                    <img src="img/feature1.png" alt="">
                    <p>Разработка мобильных игр</p>
                    <img src="img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="img/feature2.png" alt="">
                    <p>Разработка РС игр</p>
                    <img src="img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="img/feature3.png" alt="">
                    <p>Разработка PS4 игр</p>
                    <img src="img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="img/feature4.png" alt="">
                    <p>AR/VR решения</p>
                    <img src="img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="img/feature5.png" alt="">
                    <p>AR/ VR дизайн</p>
                    <img src="img/arrow.png" alt="">
                </div>
                <div class="block">
                    <img src="img/feature6.png" alt="">
                    <p>3D Moделирование</p>
                    <img src="img/arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container projects">
            <h3>Последние проэкты</h3>
            <p>Нейронные процессоры (NPU) произвели фурор на рынке искусственного интеллекта, особенно благодаря их интеграции в такие процессоры, как Intel Meteor Lake.

                Благодаря этой плитке синей команде удалось внедрить огромную вычислительную мощность ИИ на борту процессоров, в конечном итоге сделав возможным использование ИИ на всех совместимых устройствах. Теперь, похоже, Intel планирует продвинуться вперед, как сообщает Phoronix, начальные исправления Linux показывают, что будущие SoC "Panther Lake" будут оснащены новыми NPU 5-го поколения, также обозначенными как NPU5. </p>
            <div class="images">
                <img src="img/Project1.png" alt="">
                <img src="img/Project2.png" alt="">
                <img src="img/Project3.png" alt="">
            </div>
            <div class="images">
                <img src="img/Project4.png" alt="">
                <img src="img/Project5.png" alt="">
                <img src="img/Project6.png" alt="">
            </div>
            <a href="" class="see-all">Еще</a>
        </div>

        <div class="container email">
            <h3>Обратная связь </h3>
            <p>Рассылка последних новостей и обновлений</p>
            <div class="block">
                <div>
                    <h4>Оставайтесь в курсе событий</h4>
                    <p>Подпишитесь чтобы получать последние новости</p>
                </div>
                <div>
                    <input type="email" id="emailField" placeholder="Введите email">
                    <button onclick="checkEmail()">Подписаться</button>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>

   
</body>
</html>