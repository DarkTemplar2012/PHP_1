<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta name="keywords" content="Ремонт ноутбуков, ремонт компьютеров, замена экрана, замена дисплея, чистка от пыли, восстановление корпуса, клавиатура для ноутбука, блок питания для ноутбука, профессиональный ремонт ноутбуков"> -->
  <meta name="description"
    content="Ремонт ноутбуков Алматы - профессиональный, качественный и недорогой. Мастера с опытом работы более 12 лет. Гарантия на все виды работ!">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ремонт ноутбуков Алматы - недорого. Сервис центр - AlfaCom.kz</title>
  <meta property="og:title" content="AlfaCom Сервис центр">
  <meta property="og:description" content="Профессиональный и качественный ремонт ноутбуков и компьютеров">
  <meta property="og:image" content="public/img/post.jpg">
  <meta property="og:url" content="https://alfacom.kz">
  <meta property="og:type" content="website">
  <link rel="icon" href="public/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=00zJjxpNwm">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=00zJjxpNwm">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=00zJjxpNwm">
  <link rel="manifest" href="/site.webmanifest?v=00zJjxpNwm">
  <link rel="mask-icon" href="/safari-pinned-tab.svg?v=00zJjxpNwm" color="#007596">
  <link rel="shortcut icon" href="public/favicon.ico?v=00zJjxpNwm">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="public/css/main.css?v=1.2.1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-dark bg-dark">

    <?php if (!$_SESSION['isAuth']): ?>
    <div>
      <span class="navbar-brand">Здравствуй, гость</span>
      <a href="/login.php" class="btn btn-success" role="button" aria-pressed="true">Авторизация</a>
      <a href="/index.php" class="btn btn-info" role="button" aria-pressed="true">Главная</a>
      <a href="/basket.php" style="margin-right: 0;color: white; display: block;">В корзине
        <?php
        if (isset($_SESSION['good'])) {
            echo count($_SESSION['good']);
        } else {
            echo 0;
        }
        ?>
        товаров</a>
    </div>
    <?php else: ?>
    <div>
      <span class="navbar-brand">Вы авторизированы как <a href="/cabinet.php"><strong style="color: white;"><?=$_SESSION['user_name']?></strong></a>
        <a href="/index.php" class="btn btn-info" role="button" aria-pressed="true">Главная</a>

        <form method="post" style="display: inline;">
          <input type="submit" name="logout" value="Exit" class="btn btn-danger">
        </form>


      </span>
      <a href="/basket.php" style="margin-right: 0;color: white; display: block;">В корзине
        <?php
          if (isset($_SESSION['good'])) {
              echo count($_SESSION['good']);
          } else {
              echo 0;
          }
        ?>
        товаров</a>

    </div>
    <?endif;?>
  </nav>