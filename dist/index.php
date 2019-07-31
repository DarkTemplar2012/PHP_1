<?php
const BR = '<br/>';
$a = 5;
$b = '05';
// var_dump($a == $b) . BR; // Почему true? Потомучто идёт сравнение без типа и строка 05 приводится как числовое и 5 = 5 тру
// var_dump((int) '012345') . BR; // Почему 12345? инт приводит к целому числу. А целые числа с 0 не могут начинаиться
// var_dump((float) 123.0 === (int) 123.0) . BR; // Почему false? Потому что идёт проверка по типу в одном инт в другом флоат. === false а если == true
// var_dump((int) 0 === (int) 'hello, world') . BR; // Почему true? Потому что сравнение с числом проверяет  чиисло и так как строка начинается не с число то приводится к 0

$title = 'Ремонт ноутбуков Алматы - недорого. Сервис центр - AlfaCom.kz';
$h1 = 'Ремонт ноутбуков Алматы';
$time = getdate();


// Работает только с положительными числами
$x = 150;
$y = 4130;
$x = $x + $y;
$y = $x - $y;
$x = $x - $y;
// echo $x . ' ' . $y
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

  <title><?=$title?></title>

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

  <header class="b-header" data-parallax="scroll" data-position='center -55px'
    data-image-src="img/computer-2982270_1920.jpg">
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
      <h1 class="b-header_title wow zoomIn"><?=$h1?></h1>
    </div>
    <div class="b-header_time">Текущее время <?=$time['hours'] . ":" . $time['minutes']?></div>
  </header>

  <main class="b-main">
    <div class="b-mainLink" id="link">
      <div class="b-mainLink_social">
        <span class="b-mainLink_title wow zoomIn">Наши контакты. Подписывайся</span>
        <div class="b-mainLink_2gis">
          <a href="http://go.2gis.com/2gss5" target="_blank" class="b-mainLink_2gisLogo wow fadeInLeft">Мынбаева 46,
            офис 112</a>
        </div>
        <div class="b-mainLink_instagram">
          <a href="https://www.instagram.com/_u/service_alfacom/" target="_blank"
            class="b-mainLink_instagramLogo wow fadeInLeft ">@service_alfacom</a>
        </div>
        <div class="b-mainLink_vk">
          <a href="https://vk.com/servicecenteralfacom" target="_blank"
            class="b-mainLink_vkLogo wow fadeInLeft ">/ServiceCenterAlfaCom</a>
        </div>
        <div class="b-mainLink_facebook">
          <a href="https://www.facebook.com/ServiceCenterAlfaCom" target="_blank"
            class="b-mainLink_facebookLogo wow fadeInLeft ">/ServiceCenterAlfaCom</a>
        </div>
      </div>
      <div class="b-mainLink_tel">
        <span class="b-mainLink_title wow zoomIn">Наши телефоны. Звони</span>
        <div class="b-mainLink_master wow fadeInRight">
          <img src="img/alex.jpg" alt="AlfaCom Алексей" class="b-mainLink_master__alex">
          <a href="tel:+77072615500" target="_blank" class="b-mainLink_masterInfo">
            <div class="b-mainLink_masterInfo__name">Алексей</div>
            <div class="b-mainLink_masterInfo__tel">+7 707 261 55 00</div>
          </a>
          <a href="https://api.whatsapp.com/send?phone=77072615500&text=Здравствуйте! " class="b-mainLink__waLogo"></a>
        </div>
        <div class="b-mainLink_master wow fadeInRight">
          <img src="img/den.jpg" alt="AlfaCom Денис" class="b-mainLink_master__den">
          <a href="tel:+77777433003" target="_blank" class="b-mainLink_masterInfo">
            <div class="b-mainLink_masterInfo__name">Денис</div>
            <div class="b-mainLink_masterInfo__tel">+7 777 743 30 03</div>
          </a>
          <a href="https://api.whatsapp.com/send?phone=77777433003&text=Здравствуйте! " class="b-mainLink__waLogo"></a>
        </div>
      </div>
    </div>
    <div class="b-mainForm parallax-window" id="request" data-parallax="scroll"
      data-image-src="img/blogger-336371_1920.jpg">
      <span class="b-mainForm_title wow zoomIn">Оставьте заявку, мы Вам обязательно перезвоним.</span>
      <form action="telegram" method="POST" class="b-mainForm_inputs">
        <div>
          <div class="b-mainForm__name wow fadeInLeft">
            <input type="text" class="b-mainForm__nameInput" id="name" name="user_name"
              placeholder="Введите ваше имя: ">
          </div>
          <div class="b-mainForm__tel wow fadeInLeft">
            <input type="tel" class="b-mainForm__telInput" id="phone" name="user_phone"
              placeholder="Введите номер тел.: +7(999)999-9999">
          </div>
        </div>
        <div class="b-mainForm__txt wow fadeInRight">
          <textarea name="user_txt" id="txt" placeholder="*необязательно. Можно кратко описать проблему."
            class="b-mainForm__txtArea"></textarea>
        </div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
        <div class="b-mainForm__submite wow fadeInUp">
          <button type="submit" class="btn btn-primary b-mainForm_subBtn">Оставить заявку</button>
        </div>
      </form>
    </div>

    <div class="b-main_services" id="services">
      <div class="b-main_services__wrap">
        <div class="b-main_services__description wow zoomIn">
        </div>
        <div class="b-main_services__title wow zoomIn">
          У нас Вы можете решить:
        </div>
        <div class="b-main_services__card wow fadeInDown">
          <img src="img/icons8-broom-96.png" alt="Чистка от пыли ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Чистка от пыли</h2>
          <a href="chistka-ot-pyli#description" class="b-main_services__cardTxt">Если Ваш ноутбук шумит и греется, то в
            срочном
            порядке необходимо произвести удаление пыли, во избежании дорогостоящей поломки.<span
              class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInDown">
          <img src="img/icons8-windows8-96.png" alt="Переустановка Windows" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Переустановка Windows</h2>
          <a href="pereustanovka-windows#description" class="b-main_services__cardTxt">Если Ваш Windows работает со
            сбоями либо
            не загружается, то мы можем решить эту проблему, с сохранением Вашей информации.<span
              class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInDown">
          <img src="img/icons8-mac-client-96.png" alt="Переустановка macOS" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Переустановка macOS</h2>
          <a href="pereustanovka-macos#description" class="b-main_services__cardTxt">Если Ваш macOS работает со сбоями
            либо не
            загружается, то мы можем решить эту проблему, с сохранением Вашей информации.<span
              class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInDown">
          <img src="img/icons8-laptop-96.png" alt="Замена дисплея ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Замена дисплея</h2>
          <a href="zamena-displeya#description" class="b-main_services__cardTxt">Разбили или раздавили дисплей? Не
            проблема мы
            можем его заменить, матрицы имеются почти на все модели ноутбуков.<span
              class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInDown">
          <img src="img/icons8-support-96.png" alt="Восстановление корпуса ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Восстановление корпуса</h2>
          <a href="vosstanovlenie-korpusa#description" class="b-main_services__cardTxt">Треснул корпус? Крышка отходит
            от
            ноутбука? В большинстве случаев можем восстановить, что значительно дешевле замены корпуса.<span
              class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInUp">
          <img src="img/icons8-keyboard-96.png" alt="Замена клавиатуры ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Замена клавиатуры</h2>
          <a href="zamena-klaviatury#description" class="b-main_services__cardTxt">Клавиатура частично не работает? А
            может
            клавиши сами нажимаются? Тогда надо заменить всю клавиатуру, клавиатуры имеются в наличии на большинство
            моделей ноутбуков.<span class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInUp">
          <img src="img/icons8-low-battery-96.png" alt="Замена аккумулятора ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Замена аккумулятора</h2>
          <a href="zamena-akkumulyatora#description" class="b-main_services__cardTxt">Если Ваш аккумулятор мало держит
            заряд
            или вообще не держит, мы можем его заменить, аккумуляторы имеются в наличии на большинство моделей
            ноутбуков.<span class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInUp">
          <img src="img/icons8-lightning-bolt-96.png" alt="Блока питания для ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Замена блока питания</h2>
          <a href="zamena-bloka-pitaniya#description" class="b-main_services__cardTxt">Если при подключении блока
            питания к
            ноутбуку зарядка не происходит или при подключении нет индикации заряда, то блок питания надо заменить.
            Обращайтесь поможем.<span class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInUp">
          <img src="img/icons8-protect-96.png" alt="Антивирус, защита от вирусов" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Защита от вирусов</h2>
          <a href="zashita-ot-virusov#description" class="b-main_services__cardTxt">В браузере появляется реклама,
            появляются
            непонятные окна или непонятные файлы? Тогда Ваш компьютер заражён вирусами. Приносите и мы обязательно
            решим эту проблему.<span class="b-main_services__cardBtn">Подробно</span></a>
        </div>
        <div class="b-main_services__card wow fadeInUp">
          <img src="img/icons8-speed-96.png" alt="Апгрейд ускорение ноутбука" class="b-main_services__cardImg">
          <h2 class="b-main_services__cardTitle">Ускорение ноутбука</h2>
          <a href="uskorenie-noutbuka#description" class="b-main_services__cardTxt">Если Ваш ноутбук медленно работает
            или
            хотите что бы заработал быстрее, то мы можем это сделать без больших денежных затрат.<span
              class="b-main_services__cardBtn">Подробно</span></a>
        </div>
      </div>
    </div>
    <div class="b-main_benefit" id="benefit" data-parallax="scroll" data-position='center center'
      data-image-src="img/laptop-1483974_1920.jpg">
      <div class="b-main_benefit__wrap">
        <div class="b-main_benefit__title wow zoomIn">
          Почему стоит обратиться именно к нам:
        </div>
        <div class="b-main_benefit__card  wow fadeInLeft">
          <div>
            <div class="b-main_benefit__cardNumber">
              1
            </div>
            <div class="b-main_benefit__cardTitle">
              деньги
            </div>
          </div>
          <div class="b-main_benefit__cardTxt">
            Диагностика от мастера совершенно бесплатно.
          </div>
        </div>
        <div class="b-main_benefit__card wow fadeInRight">
          <div>
            <div class="b-main_benefit__cardNumber">
              2
            </div>
            <div class="b-main_benefit__cardTitle">
              Гарантия
            </div>
          </div>
          <div class="b-main_benefit__cardTxt">
            Даём на любую работу гарантию.
          </div>
        </div>
        <div class="b-main_benefit__card wow fadeInLeft">
          <div>
            <div class="b-main_benefit__cardNumber">
              3
            </div>
            <div class="b-main_benefit__cardTitle">
              Силы
            </div>
          </div>
          <div class="b-main_benefit__cardTxt">
            Вам не нужно искать другие сервисы или магазины, необходимые комплектующие, мы можем всё найти сами.
          </div>
        </div>
        <div class="b-main_benefit__card wow fadeInRight">
          <div>
            <div class="b-main_benefit__cardNumber">
              4
            </div>
            <div class="b-main_benefit__cardTitle">
              Качество
            </div>
          </div>
          <div class="b-main_benefit__cardTxt">
            Ваши проблемы решат мастера с опытом работы более 12 лет.
          </div>
        </div>
        <div class="b-main_benefit__card wow fadeInLeft">
          <div>
            <div class="b-main_benefit__cardNumber">
              5
            </div>
            <div class="b-main_benefit__cardTitle">
              Время
            </div>
          </div>
          <div class="b-main_benefit__cardTxt">
            Мы сделаем все качественно и быстро, возможно сразу при Вашем присутствии.
          </div>
        </div>
        <div class="b-main_benefit__card wow fadeInRight">
          <div>
            <div class="b-main_benefit__cardNumber">
              6
            </div>
            <div class="b-main_benefit__cardTitle">
              Юр. лица
            </div>
          </div>
          <div class="b-main_benefit__cardTxt">
            Работаем с организациями, даём всё необходимые документы.
          </div>
        </div>
      </div>
    </div>
    <div class="b-main_description" id="description">
      <div class="b-main_description__txt wow zoomIn">
        <p>В&nbsp;современном мире уже сложно представить полноценную жизнь без компьютера или ноутбука. Особенно радует
          когда Ваш ноутбук исправно и&nbsp;быстро работает, но&nbsp;вот беда&nbsp;&mdash; он&nbsp;взял и&nbsp;сломался
          или сломали нечаянно? Теперь Вы&nbsp;не&nbsp;можете нормально работать или сделать <nobr>какое-то</nobr>
          срочное действие? Тогда необходимо произвести <strong>ремонт вашего ноутбука</strong>
          и&nbsp;мы&nbsp;занимаемся именно этим. Вы&nbsp;смело можете доверит Ваш ценный ноутбук инженерам нашего
          сервисного центра по&nbsp;ремонту ноутбуков. Мы&nbsp;рады предложить вам полный спектр услуг, с&nbsp;которым
          вы&nbsp;можете ознакомиться ниже, по&nbsp;ремонту ноутбуков! Наши мастера могут решить всё ваши проблемы, будь
          то&nbsp;чистка, переустановка ОС, замена <nobr>каких-либо</nobr> деталей (матрицы, клавиатуры, жёсткие диски,
          блоки питания). Мы&nbsp;считаем одним из&nbsp;наших преимуществ качественная консультация, что необходимо
          сделать не&nbsp;только для решения текущей проблемы, но&nbsp;и&nbsp;для лучшей работы ноутбука! Вы&nbsp;будете
          довольны произведённым результатом! Так что&nbsp;же Вам необходимо сейчас сделать? <a
            href="http://go.2gis.com/2gss5">Приходите</a> к&nbsp;нам и&nbsp;мы&nbsp;совершенно бесплатно сделаем
          диагностику ноутбука и&nbsp;сориентируем по&nbsp;стоимости ремонта и&nbsp;его времени исполнения. Или можете
          нам <a href="#contact">позвонить</a>, или <a href="#request">оставить заявку</a> и&nbsp;мы&nbsp;вам
          перезвоним.</p>
      </div>
      <div class="b-main_description__img">
        <a data-fancybox="gallery" href="img/remont-notebook1.jpg" class="b-main_description__imgA">
          <img src="img/remont-notebook1_small.jpg" alt="Ремонт ноутбуков"
            class="b-main_description__imgUnit wow fadeInDown">
        </a>
        <a data-fancybox="gallery" href="img/remont-notebook2.jpg" class="b-main_description__imgA">
          <img src="img/remont-notebook2_small.jpg" alt="Ремонт ноутбуков"
            class="b-main_description__imgUnit wow fadeInUp">
        </a>
        <a data-fancybox="gallery" href="img/remont-notebook3.jpg" class="b-main_description__imgA">
          <img src="img/remont-notebook3_small.jpg" alt="Ремонт ноутбуков"
            class="b-main_description__imgUnit wow fadeInDown">
        </a>
        <a data-fancybox="gallery" href="img/remont-notebook4.jpg" class="b-main_description__imgA">
          <img src="img/remont-notebook4_small.jpg" alt="Ремонт ноутбуков"
            class="b-main_description__imgUnit wow fadeInUp">
        </a>
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
    <div class="b-map">
      <div class="b-map__qr"></div>
      <a class="dg-widget-link"
        href="http://2gis.kz/almaty/firm/9429940001071871/center/76.90193116664888,43.23764105819353/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
        на карте Алматы</a>
      <div class="dg-widget-link">
        <a
          href="http://2gis.kz/almaty/firm/9429940001071871/photos/9429940001071871/center/76.90193116664888,43.23764105819353/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
          компании</a>
      </div>
      <div class="dg-widget-link">
        <a
          href="http://2gis.kz/almaty/center/76.901545,43.237148/zoom/17/routeTab/rsType/bus/to/76.901545,43.237148╎AlfaCom, сервисный центр?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
          проезд до AlfaCom, сервисный центр</a>
      </div>
      <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
      <script charset="utf-8">
        new DGWidgetLoader({
          "width": "100%",
          "height": 500,
          "borderColor": "none",
          "pos": {
            "lat": 43.23764105819353,
            "lon": 76.90193116664888,
            "zoom": 17
          },
          "opt": {
            "city": "almaty"
          },
          "org": [{
            "id": "9429940001071871"
          }]
        });
      </script>
      <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в
        настройках вашего браузера.</noscript>
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
