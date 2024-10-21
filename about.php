<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="icons/icons8-ps-controller-64.png">
    <script src="js/script.js"></script>
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

        <div class="news-container">
            <div class="news">
                <div class="news-picture"><img src="img/news1.webp"></div>
                <div class="news-text"><h2>Ремейк Silent Hill 2 получает хорошие оценки от игроков в Steam</h2><br/>
                <p>Разработчик Bloober Team сталкнулся со сложной задачей балансировки, перенося любимую классику 2001 года, такую ​​как Silent Hill 2, на новое поколение. Хорошей новостью является то, что ремейк Silent Hill 2, выпущенная на PlayStation 5 и ПК, действительно передает суть, атмосферу хоррора на выживание от Konami, при этом внося умные улучшения в его дизайн.

                    Похоже, что и игрокам в Steam понравилась новая версия классического хоррора от Konami. Несмотря на то, что игра стала доступна только для обладателей Deluxe-издания, в Steam у неё уже 1344 обзоров, 95% которых являются положительными.</p>
                    </div>
            </div>
            
            <div class="comm"><img src="icons/icons8-comments-26.png"><a href="/comments.php">comment</a></div>
            <button class="btn-like" onclick="countBtn()">
                <span class="left-side">
                    <img src="img/icons8-сердце-24.png">
                    <span class="like">Like</span>
                </span>
                <span id="count">0</span>
            </button>
            
           

            <div class="news">
                <div class="news-picture"><img src="img/news2.jpeg"></div>
                <div class="news-text"><h2>Для ПК-версии God of War Ragnarok вышло 5-е обновление с исправлениями объемного тумана, достижений и другим</h2><br/>
                <p>Jetpack Interactive выпустила обновление ПК-версии God of War Ragnarok от 4 октября. Патч №5 направлен на исправление объёмного тумана на видеокартах NVIDIA, неразблокируемых достижений и на предотвращение сбоев при загрузке игры.</p></div>
            </div>

            <div class="comm"><img src="icons/icons8-comments-26.png"><a href="/comments.php">comment</a></div>
            <button class="btn-like" onclick="countBtn2()">
                <span class="left-side">
                    <img src="img/icons8-сердце-24.png">
                    <span class="like">Like</span>
                </span>
                <span id="count2">0</span>
            </button>

            

            <div class="news">
                <div class="news-picture"><img src="img/news3.webp"></div>
                <div class="news-text"><h2>Похоже, высокая цена - не проблема. Red Dead Redemption в списке бестселлеров Steam</h2><br/>
                <p>Студия GamesVoice продолжает делиться подробностями грядущей онлайн-презентации VoiceCon 2024: на ней будет демонстрация и подробности озвучки Grand Theft Auto: Vice City.

                    По словам студии, сейчас GamesVoice тестируют полную сборку перевода игры, которая "находится где-то через одну от финальной". Таким образом, релиз озвучки, вероятно, может состояться уже скоро. Так же на онлайн-презентации покажут в том числе русскую озвучку для Max Payne 3, Alan Wake 2, Star Wars Jedi: Survivor и ряда других проектов.
                    
                    Онлайн-презентация VoiceCon 2024 состоится уже завтра в 19:05 по московскому времени.</p></div>
            </div>

            <div class="comm"><img src="icons/icons8-comments-26.png"><a href="/comments.php">comment</a></div>
            <button class="btn-like" onclick="countBtn3()">
                <span class="left-side">
                    <img src="img/icons8-сердце-24.png">
                    <span class="like">Like</span>
                </span>
                <span id="count3">0</span>
            </button>

            <div class="news">
                <div class="news-picture"><img src="img/news4.webp"></div>
                <div class="news-text"><h2>Стала доступна демоверсия хоррора Butcher's Creek вдохновлённого Manhunt и Condemned</h2><br/>
                <p>Давид Шимански, создатель бумер-шутера DUSK, сообщил о выходе демоверсии своего нового проекта Butcher's Creek, вдохновлённого хоррор-играми Manhunt и Condemned

                    Эта демоверсия познакомит вас с миром, атмосферой и боями Butcher's Creek, с примерно 30 минутами игрового процесса от введения полной игры и первого уровня.
                    
                    Используйте молотки, топоры, трубы, 2x4, канцелярские ножи и многое другое, чтобы уничтожить все, что стоит между вами и свободой
                    Когда все остальное терпит неудачу, сам уровень может стать оружием. Бросайте реквизит во врагов или врагов в опасности окружающей среды.
                    </p></div>
            </div>
            
            <div class="comm"><img src="icons/icons8-comments-26.png"><a href="/comments.php">comment</a></div>
            <button class="btn-like" onclick="countBtn4()">
                <span class="left-side">
                    <img src="img/icons8-сердце-24.png">
                    <span class="like">Like</span>
                </span>
                <span id="count4">0</span>
            </button>
            
        </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>