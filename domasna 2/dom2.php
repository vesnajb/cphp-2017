<?php

header('Content-Type:text/html; charset=utf-8'); 

$lat = ['gj', 'zh', 'dz', 'lj', 'nj', 'kh', 'ch', 'dzh', 'sh', 'Gj', 'Zh', 'Dz', 'Lj', 'Nj', 'Kh', 'Ch', 'Sh', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'j', 'k', 'l',  'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'X'];

$cyr = ['ѓ', 'ж', 'ѕ', 'љ', 'њ', 'ќ', 'ч', 'џ', 'ш', 'Ѓ', 'Ж', 'Ѕ', 'Љ', 'Њ', 'Ќ', 'Ч','Sh', 'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'ј', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Ј', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Џ'];


// $cyr = ['а', 'б', 'в', 'г'];
// $lat = ['a', 'b', 'v', 'g'];

echo count($lat);
echo '<br/>';
echo count($cyr);
echo '<br/>';

switch($_POST['opcija']){
	case 'l2c':
		// echo 'L2C';
		// echo 'Tekst na latinica:'.'<br>'.$_POST['text'].'<br>'.'<br>';
		// echo 'Tekst na kirilica:'.'<br>'.str_replace($lat, $cyr, $_POST['text']).'<br>'.'<br>';
		echo str_replace($lat, $cyr, $_POST['text']);
		break;
	case 'c2l':
		// echo 'C2L';
		// echo 'Tekst na kirilica:'.'<br>'.$_POST['text'].'<br>';
		// echo 'Tekst na latinica:'.'<br>'.str_replace($cyr, $lat, $_POST['text']);
		// print_r($cyr);
		// print_r($lat);
		// echo $_POST['text'];
		echo str_replace($cyr, $lat, $_POST['text']);
		break;
}


?>