<?php
$cyr = ['а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'ж', 'з', 'ѕ', 'и', 'ј', 'к', 'л', 'љ', 'м', 'н', 'њ', 'о', 'п', 'р', 'с', 'т', 'ќ', 'у', 'ф', 'х', 'ц', 'ч', 'џ', 'ш', 'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'Ж', 'З', 'Ѕ', 'И', 'Ј', 'К', 'Л', 'Љ', 'М', 'Н', 'Њ', 'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Џ', 'Ш'];
$lat = ['a', 'b', 'v', 'g', 'd', 'gj', 'e', 'zh', 'z', 'dz', 'i', 'j', 'k', 'l', 'lj', 'm', 'n', 'w', 'o', 'p', 'r', 's', 't', 'kh', 'u', 'f', 'h', 'c', 'ch', 'dzh', 'sh', 'A', 'B', 'V', 'G', 'D', 'Gj', 'E', 'Zh', 'Z', 'Dz', 'I', 'J', 'K', 'L', 'Lj', 'M', 'N', 'Nj', 'O', 'P', 'R', 'S', 'T', 'Kh', 'U', 'F', 'H', 'C', 'Ch', 'Dzh', 'Sh'];



echo 'Tekst na latinica:'.'<br>'.$_POST['text_lat'].'<br>'.'<br>';
echo 'Tekst na kirilica:'.'<br>'.str_replace($lat, $cyr, $_POST['text_lat']).'<br>'.'<br>';

// echo 'Tekst na kirilica:'.'<br>'.$_POST['text_cyr'].'<br>';
// echo 'Tekst na latinica:'.'<br>'.str_replace($cyr, $lat, $_POST['text_cyr']);



?>