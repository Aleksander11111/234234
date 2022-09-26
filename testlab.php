<?php
	for($i=1; $i<=50; $i++){
		if ($i % 2 == 1)
		echo $i. '</br>';
	}
	$var = 'HELL';
	$i =0;
	while($i < strlen($var))
		echo "<br>". $var{$i++}. "<br>";