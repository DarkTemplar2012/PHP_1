<?php
require "./php_files/variable.php";
require "./php_files/function.php";

$imgArr = myScan(IMG_GALLERY_ROOT);

// print_r($imgArr);
?>
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
  <meta property="og:image" content="img/post.jpg">
  <meta property="og:url" content="https://alfacom.kz">
  <meta property="og:type" content="website">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=00zJjxpNwm">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=00zJjxpNwm">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=00zJjxpNwm">
  <link rel="manifest" href="/site.webmanifest?v=00zJjxpNwm">
  <link rel="mask-icon" href="/safari-pinned-tab.svg?v=00zJjxpNwm" color="#007596">
  <link rel="shortcut icon" href="/favicon.ico?v=00zJjxpNwm">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/main.css?v=1.2.1">
</head>

<body>
  <header class="b-header jumbotron">
    <div class="b-header__wrap">
      <div class="b-header_nav__burgerMain"><span class="b-header_nav__burger"></span></div>
      <nav class="b-header_nav wow zoomInRight" id="menu">
        <ul class="b-header_navUl">
          <li class="b-header_navLi"><a href="index" class="b-header_navA">Главная</a></li>
          <li class="b-header_navLi"><a href="#link" class="b-header_navA">Ссылки на нас</a></li>
          <li class="b-header_navLi"><a href="#request" class="b-header_navA">Оставить заявку</a></li>
          <li class="b-header_navLi"><a href="#services" class="b-header_navA">Услуги</a></li>
          <li class="b-header_navLi"><a href="#benefit" class="b-header_navA">Преимущества</a></li>
          <li class="b-header_navLi"><a href="#contact" class="b-header_navA">Контакты</a></li>
        </ul>
      </nav>
      <a href="https://alfacom.kz/" class="b-hedaer_logo"><img src="img/logo.svg" alt="Ремонт ноутбуков AlfaCom"
          class="b-header_logo"></a>
      <h1 class="b-header_title wow zoomIn">Ремонт ноутбуков Алматы</h1>
    </div>
  </header>
  <main class="b-main">
    <div class="b-main_description" id="description">
      <div class="b-main_description__txt wow zoomIn">
        <p>В&nbsp;современном мире уже сложно представить полноценную жизнь без компьютера или ноутбука.
          Особенно радует
          когда Ваш ноутбук исправно и&nbsp;быстро работает, но&nbsp;вот беда&nbsp;&mdash; он&nbsp;взял
          и&nbsp;сломался
          или сломали нечаянно? Теперь Вы&nbsp;не&nbsp;можете нормально работать или сделать <nobr>какое-то
          </nobr>
          срочное действие? Тогда необходимо произвести <strong>ремонт вашего ноутбука</strong>
          и&nbsp;мы&nbsp;занимаемся именно этим. Вы&nbsp;смело можете доверит Ваш ценный ноутбук инженерам
          нашего
          сервисного центра по&nbsp;ремонту ноутбуков. Мы&nbsp;рады предложить вам полный спектр услуг,
          с&nbsp;которым
          вы&nbsp;можете ознакомиться ниже, по&nbsp;ремонту ноутбуков! Наши мастера могут решить всё ваши
          проблемы, будь
          то&nbsp;чистка, переустановка ОС, замена <nobr>каких-либо</nobr> деталей (матрицы, клавиатуры,
          жёсткие диски,
          блоки питания). Мы&nbsp;считаем одним из&nbsp;наших преимуществ качественная консультация, что
          необходимо
          сделать не&nbsp;только для решения текущей проблемы, но&nbsp;и&nbsp;для лучшей работы ноутбука!
          Вы&nbsp;будете
          довольны произведённым результатом! Так что&nbsp;же Вам необходимо сейчас сделать? <a
            href="http://go.2gis.com/2gss5">Приходите</a> к&nbsp;нам и&nbsp;мы&nbsp;совершенно бесплатно
          сделаем
          диагностику ноутбука и&nbsp;сориентируем по&nbsp;стоимости ремонта и&nbsp;его времени исполнения.
          Или можете
          нам <a href="#contact">позвонить</a>, или <a href="#request">оставить заявку</a> и&nbsp;мы&nbsp;вам
          перезвоним.</p>
      </div>
      <div class="b-main_description__img">
        <?php renderGallery($imgArr);?>
      </div>
    </div>
  </main>
  <footer class="b-footer">
    <div class="b-footer_contact" id="contact">
      <div class="b-footer_contact__wrap" itemscope itemtype="http://schema.org/Organization">
        <div class="b-footer_contact__AllUnit wow bounceInRight">
          <div class='b-footer_contact__name' itemprop="name">Ремонт ноутбуков. Сервис центр - AlfaCom</div>
          <div class="b-footer_contact__unitTitle">Адрес:</div>
          <div class="b-footer_contact__unit">
            <a href="https://goo.gl/maps/epoaPbmV8V22" target="_blank" class="b-footer_contact__unitA"
              itemprop="address">РК, г. Алматы, ул.
              Мынбаева, дом 46, офис 112 (под лестницей).</a>
          </div>
        </div>
        <div class="b-footer_contact__AllUnit wow bounceInLeft">
          <div class="b-footer_contact__unitTitle">Телефоны:</div>
          <div class="b-footer_contact__unit">
            <a href="tel:+77273923384" target="_blank" class="b-footer_contact__unitA" itemprop="telephone">+7 727 392
              33 84 городской,</a>
            <a href="tel:+77777433003" target="_blank" class="b-footer_contact__unitA" itemprop="telephone">+7 777 743
              30 03 Денис,</a>
            <a href="tel:+77072615500" target="_blank" class="b-footer_contact__unitA" itemprop="telephone">+7 707 261
              55 00 Алексей.</a>
          </div>
        </div>
        <div class="b-footer_contact__AllUnit wow bounceInRight">
          <div class="b-footer_contact__unitTitle">Почта:</div>
          <div class="b-footer_contact__unit">
            <a href="mailto:service-center@mail.ru" target="_blank" class="b-footer_contact__unitA"
              itemprop="email">service-center@mail.ru</a>
            <a href="mailto:denoms@bk.ru" target="_blank" class="b-footer_contact__unitA"
              itemprop="email">denoms@bk.ru</a>
            <a href="mailto:alexberk@bk.ru" target="_blank" class="b-footer_contact__unitA"
              itemprop="email">alexberk@bk.ru</a>

          </div>
        </div>
        <div class="b-footer_contact__AllUnit wow bounceInLeft">
          <div class="b-footer_contact__unit">Режим работы:</div>
          <div class="b-footer_contact__unitWorkDay">
            <span class="b-footer_contact__workDay">Пн</span>
            <span class="b-footer_contact__workDay">Вт</span>
            <span class="b-footer_contact__workDay">Ср</span>
            <span class="b-footer_contact__workDay">Чт</span>
            <span class="b-footer_contact__workDay">Пт</span>
            <span class="b-footer_contact__workDay">Сб</span>
            <span class="b-footer_contact__workDay">Вс</span>
          </div>
        </div>
      </div>
    </div>


    <div class="b-footer_pages">
      <span class="b-footer_pages__title">Наши страницы</span>
      <div class="b-footer_pages__wrap">
        <a href="index#description" class="b-footer_pages__link">Ремонт ноутбуков</a>
        <a href="remont-computerov#description" class="b-footer_pages__link">Ремонт компьютеров</a>
        <a href="remont-apple#description" class="b-footer_pages__link">Ремонт Apple</a>
        <a href="chistka-ot-pyli#description" class="b-footer_pages__link">Чистка ноутбука</a>
        <a href="pereustanovka-windows#description" class="b-footer_pages__link">Установка Windows</a>
        <a href="pereustanovka-macos#description" class="b-footer_pages__link">Установка macOS</a>
        <a href="zamena-displeya#description" class="b-footer_pages__link">Ремонт матрицы</a>
        <a href="vosstanovlenie-korpusa#description" class="b-footer_pages__link">Ремонт корпуса</a>
        <a href="zamena-klaviatury#description" class="b-footer_pages__link">Ремонт клавиатуры</a>
        <a href="zamena-akkumulyatora#description" class="b-footer_pages__link">Ремонт аккумулятора</a>
        <a href="zamena-bloka-pitaniya#description" class="b-footer_pages__link">Ремонт блока питания</a>
        <a href="zashita-ot-virusov#description" class="b-footer_pages__link">удаление вирусов</a>
        <a href="uskorenie-noutbuka#description" class="b-footer_pages__link">Ноутбук тормозит</a>
      </div>
    </div>
  </footer>
  <script src="js/main.js?v=1.2.1"></script>
</body>

</html>