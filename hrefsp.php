<!DOCTYPE html>
<html>
	<head>
		<title>
		</title>
	</head>
	<meta charset="UTF-8">
	<body>
	<div id="nav">
	<!-- Навигация -->
	<h2>Меню навигации</h2>
	<!-- Меню -->
	<?php
	$LeftMenu = [
	['link'=>'Домой', 'href'=>'index.php'],
	['link'=>'О нас', 'href'=>'about.php'],
	['link'=>'Контакты', 'href'=>'contact.php'],
	['link'=>'Таблица умножения', 'href'=>'table.php'],
	['link'=>'Калькулятор', 'href'=>'calc.php'],
	['link'=>'Рецепт', 'href'=>'recept.php'],
	];
	?>
	<ul>
		<li><a href='<?= $LeftMenu[0]['href']?>'><?= $LeftMenu[0]['link']?></a>
		</li>
		<li><a href='<?= $LeftMenu[1]['href']?>'><?= $LeftMenu[1]['link']?></a>
		</li>
		<li><a href='<?= $LeftMenu[2]['href']?>'><?= $LeftMenu[2]['link']?></a>
		</li>
		<li><a href='<?= $LeftMenu[3]['href']?>'><?= $LeftMenu[3]['link']?></a>
		</li>
		<li><a href='<?= $LeftMenu[4]['href']?>'><?= $LeftMenu[4]['link']?></a>
		</li>
		<li><a href='<?= $LeftMenu[5]['href']?>'><?= $LeftMenu[5]['link']?></a>
		</li>
	</ul>
	<!-- Меню -->
	<!-- Навигация -->
	</div>
	</body>
</html>
	