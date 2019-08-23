<?php
$a = $_GET['fstnum'];
$b = $_GET['scdnum'];
$sym = $_GET['symbol'];

function sums($a, $b)
{
    return $a + $b;
}

function mins($a, $b)
{
    return $a - $b;
};

function divs($a, $b)
{
    if ($b == 0) {
        return 'Эй ты что, на ноль нельзя делить';
    } else {
        return $a / $b;
    }
}
function mlts($a, $b)
{
    return $a * $b;
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            echo sums($arg1, $arg2) . PHP_EOL;
            break;
        case '-':
            echo mins($arg1, $arg2) . PHP_EOL;
            break;
        case '/':
            echo divs($arg1, $arg2) . PHP_EOL;
            break;
        case '*':
            echo mlts($arg1, $arg2) . PHP_EOL;
            break;
        default:
            echo 'Некорректный символ';
    }
}
if ($a && $b && $sym) {
    mathOperation($a, $b, $sym);
}
?>
<main class="b-main">
  <!-- <div class="b-main_description" id="description">
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
      <?php // include ENGINE_DIR.'renderGallery.php';?>
  </div>
  </div> -->
  <form class="m-5">
    <div class="form-group">
      <label for="exampleFormControlInput1">Первая цифра</label>
      <input type="text" name="fstnum" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select name="symbol" class="form-control" id="exampleFormControlSelect2">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Втроая цифра</label>
      <input type="text" name="scdnum" class="form-control" id="exampleFormControlInput1">
    </div>
    <button type="submit" class="ml-3 mb-3 btn btn-primary">Посчитать!</button>

  </form>
  <div class="card-group">
    <?php
      foreach ($employees as $key => $value) :?>
    <a href="<?=$value['url']?>" class="card">
      <img src="<?=$value['img']?>"
        class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?=$value['good_name']?>
        </h5>
        <p class="card-text"><?=$value['good_description']?>
        </p>
        <p class="card-text"><small class="text-muted"><?=$value['good_price']."$"?></small>
        </p>
      </div>
    </a>

    <?php endforeach;?>

  </div>

</main>

</html>