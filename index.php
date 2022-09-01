<?php
/*
 * Получаем текущий час в виде строки от 00 до 23
 * и приводим строку к целому числу от 0 до 23
 */
$hour = (int)strftime('%H');
$welcome = ""; // Инициализируем переменную для приветствия
  if ($hour > 0 and $hour < 6)
      $welcome = "Доброй ночи";
  elseif ($hour >= 6 and $hour < 12)
    $welcome = "Доброе утро";
  elseif ($hour >= 12 and $hour < 18)
    $welcome = "Добрый день";
  elseif ($hour >= 18 and $hour < 23)
    $welcome = "Добрый вечер";
  else
      $welcome = "Доброй ночи";
?>
 // тут текст HTML, по этому открываю PHP(< ?)
<?= $welcome ?>, Гость!
 // и тут HTML
<?php
  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $mon = iconv("windows-1251", "UTF-8", $mon);
  $year = strftime('%Y');

  echo "Сегодня  $day  число, $mon  месяц, $year  год.";
  ?>