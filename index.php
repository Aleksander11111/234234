<?php
  // Установка локали и выбор значений даты
  setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $mon = iconv("windows-1251", "UTF-8", $mon);
  $year = strftime('%Y');
  echo 'Сегодня ' , $day, ' число,', $mon, ' месяц,', $year, ' год.';
