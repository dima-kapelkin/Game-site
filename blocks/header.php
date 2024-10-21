
<header>
            <span class="logo"><img src="icons/icons8-ps-controller-64.png"></span>
            <span class="play">Let's Play</span>
            
            <nav>
                <ul>
                    <li class="active"><a href="/">Главная</a></li>
                    <li><a href="about.php">Новости</a></li>
                    <li><a href="gallery.php">Галерея</a></li>
                    <?php
                    if(isset($_COOKIE['login']))
                       echo '<li><a href="/user.php">Кабинет пользователя</a></li>';
                    else
                       echo '<li><a href="/reg.php">Регистрация</a></li>
                             <li><a href="/auth.php">Авторизация</a></li>';
                    ?>

                    <li class="btn"><a href="contacts.php">О нас</a></li>
                </ul>
            </nav>
        </header>
