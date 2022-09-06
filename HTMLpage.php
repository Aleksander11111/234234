<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title>
	Page
	</title>
	</head>
	<body>
	<h1> Получение размера отправлемых данных </h1>
	<?php
		$size = ini_get("post_max_size");
		$letter = $size{strlen($size)-1};
		$size = (int)$size;
	switch($letter):
		case 'G': $size = $size * 1024;
		case 'M': $size *= 1024;
		case 'K': $size *= 1024;
	endswitch;	
?>	
	<p> Максимальный размер отправляемых данных <?php echo $size; ?> байт. </p>
<?php
	 setlocale(LC_ALL, "russian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $mon = iconv("windows-1251", "UTF-8", $mon);
  $year = strftime('%Y');
	echo "Сегодня $day  число, $mon  месяц, $year  год.";
?>
	<p><?php print_r(pathinfo('/234234/mysite.local/HTML.php')); ?></p>
	</body>
	</html>
