<?php
	$cols = 10;
	$rows = 10;
	$color = "lightblue";
?>
<!DOCTYPE html>
<html>
	
<head>
	<title> Таблица умножения </title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Табличка умножения до 10</h1>
	<div id="header">
	<!-- Верхняя часть страницы -->
	<span class="slogan">это слоган</span>
	<!-- Верхняя часть страницы -->
	</div>
	
	<div id="content">
	<!-- Заголовок -->
	<h1> таблица на 10 </h1>
	<!-- Заголовок -->
	<!-- Область основного контента -->
	<form action=' '>
		<label> Количество колонок: </label>
		<br />
		<input name='cols' type='text' value="" />
		<br />
		<label> Количество строк: </label>
		<br />
		<input name='rows' type='text' value="" />
		<br />
		<label> Цвет: </label>
		<br />
		<input name='color' type='text' value="" />
		<br />
		<br />
		<input type='submit' value="Создать" />
	</form>
	<!-- Таблица -->
<?php
		echo "<table border='1'>";
		for($tr=1; $tr<=$rows; $tr++){
		echo "<tr>";
		for($td=1; $td<=$cols; $td++){
			if($td==1 or $tr==1)
			echo "<th style='background:$color'>" . $td*$tr . "</th>";
			else
			echo "<td>" . $td*$tr . "</td>";
		}
		echo "</tr>";
		}
		echo "</table>";
?>
	<!-- Таблица -->
	<!-- Область основного контента -->
	</div>
	</body>
</html>