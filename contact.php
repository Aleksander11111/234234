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
Максимальный размер отправляемых данных <?= $size ?> байт.