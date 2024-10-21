<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комментарии</title>
    <link rel="stylesheet" href="css/style3.css">
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
<div class="container-comment">
    <form action="" method="POST">
       <label>Name:
        <input type="text" name="Name"  required></input>
       </label>
   </br>
     <label>Comment:</br>
          <textarea name="Comment"  required></textarea>
     </label>
   </br>
       <input type="submit" name="Submit" value="Submit"/>

    </form>

    <?php
    if($_POST['Submit']) {
        print "<h2>Комментарий отправлен!</h2>";

        $Name = $_POST['Name'];
        $Comment = $_POST['Comment'];

        
        $old = fopen("comments.txt","r+t");
        $old_comments = fread($old, 1024);

        
        $write = fopen("comments.txt","w+");

        $string = "<div class='comment'><span>".$Name."</span><br/>
        <span>".date("y/m/d")." | ".date("h:i A")."</span><br/>
        <span>".$Comment."</span></div>\n".$old_comments;

        fwrite($write,$string);
        fclose($write);
        fclose($old);

        $read = fopen("comments.txt","r+t");
        echo "<h1>Комментарии:</h1><hr>".fread($read,1024);
        fclose($read);

    }
    ?>
</div> 
    
    <?php require_once "blocks/footer.php"; ?>
</body>

</html>