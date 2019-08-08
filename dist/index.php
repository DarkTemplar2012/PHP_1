<?php

$title = 'Ремонт ноутбуков Алматы - недорого. Сервис центр - AlfaCom.kz';
$h1 = 'Ремонт ноутбуков Алматы';
$time = getdate();

// ДЗ 1
$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0) {
        echo $i . ' ';
    }
    $i++;
}
// ДЗ 2
$i = 0;
do {
    if ($i == 0) {
        echo "</br> $i это ноль </br>" . PHP_EOL;
    } elseif ($i % 2 == 0) {
        echo "$i чётное число </br>" . PHP_EOL;
    } else {
        echo "$i нечётное число </br>" . PHP_EOL;
    }
    $i++;
} while ($i <= 10);
// ДЗ 3
$cityArray = [
    'Московская область:' => [
        'Москва',
        'Зеленоград',
        'Клин',
    ],
    'Ленинградская область:' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ],
];
foreach ($cityArray as $key => $value) {
    echo $key . '</br>';
    foreach ($value as $subValue) {
        echo $subValue . '</br>';
    }
}
// ДЗ 4 Без lowercase
$wordArray = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sh',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
];
$str = 'привет я иду домой УРА';
// эту функцию нашёл для кодировкив интернете, зачем регулярка не понимаю
function mb_str_split($string)
{
    return preg_split('/(?<!^)(?!$)/u', $string);
}
$strSplit = mb_str_split($str);
$str = '';
foreach ($strSplit as $strSplitOne) {
    $count = 1;
    foreach ($wordArray as $my_key => $wordArrayOne) {
        $count++;
        if ($strSplitOne == $my_key) {
            $str .= $wordArrayOne;
            break;
        }
        if ($count > count($wordArray)) {
            $str .= $strSplitOne;
            // continue (2);
        }
    }
}
echo $str . '<br>';
// ДЗ 5
$str = 'привет я иду домой УРА<br>';
$strSplit = mb_str_split($str);
$str = '';
foreach ($strSplit as $strSplitOne) {
    if ($strSplitOne == ' ') {
        $str .= '_';
    }
    $str .= $strSplitOne;
}
echo $str;

// ДЗ 6
$liArr = [
    'Молдавская кухня',
    'Кавказская кухня',
    'Русская кухня' => ['Уха бурлацкая', 'Бабушкина тюря', 'Растегай'],

    'Украинская кухня',
    'Прибалтийская кухня',
];
// ДЗ 7
for ($i = 0; $i < 10;print $i, $i++) {}

// ДЗ 8
$cityArray = [
    'Московская область:' => [
        'Москва',
        'Зеленоград',
        'Клин',
    ],
    'Ленинградская область:' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт',
    ],
];
foreach ($cityArray as $key => $value) {
    foreach ($value as $subValue) {
        $strSplit = mb_str_split($subValue);
        if ($strSplit[0] == 'К') {
            echo "<br>" . $subValue . "<br>";
        }
    }
}
// ДЗ 9
function translite($string)
{
    $wordArray = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sh',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
    ];
    $strSplit = preg_split('/(?<!^)(?!$)/u', $string);
    $str = '';
    foreach ($strSplit as $strSplitOne) {
        $count = 1;
        foreach ($wordArray as $my_key => $wordArrayOne) {
            $count++;
            $strSplitOne = strtolower($strSplitOne);
            if (mb_strtolower($strSplitOne) == $my_key) {
                $str .= $wordArrayOne;
                break;
            }
            if ($strSplitOne == ' ') {
                $str .= '_';
                break;
            }
            if ($count > count($wordArray)) {
                $str .= $strSplitOne;
            }
        }
    }
    return $str;

}
echo translite('всем привет это транслит УХУХ');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hello, world!</title>
</head>

<body>
<ul>
  <!-- Тут всё запутанно. Проходим по массиву и проверяем его значения. Если оно не массив выводим значение в li
  А если массив то в ли вписываем ключ. Потом создаем ul и далее идём уже помассиву значению которое.
  И повотряем опять тоже самое создаём li  и вставляем значение-->
  <?php foreach ($liArr as $key => $value): ?>
    <li>
      <?php if (is_array($value)) {echo $key;?>
        <ul>
          <?php foreach ($value as $subValue): ?>
              <li><?=$subValue?></li>
            <?php continue;endforeach;?>
        </ul>
      <?php }if ($value != is_array($value)) {echo $value;}?>
    </li>
  <?php endforeach;?>
</ul>

</body>

</html>