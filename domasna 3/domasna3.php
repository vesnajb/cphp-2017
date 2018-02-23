<?php
$fh = fopen('test.txt', 'r');

$text = fread($fh, filesize('test.txt'));

echo $text.'<br>'.'<br>';

$array = explode(" ", $text);

$a = count($array);
echo 'Broj na zborovi: '.$a.'<br>';

 $b = strlen($text);
 echo 'Broj na karakteri: '.$b.'<br>';


$array2 = explode(". ",$text);

$c = count($array2);

echo 'Broj na recenici: '.$c.'<br>';

$d = 0;
foreach($array as $z){
	if(strlen($z)>7){
		$d++ ;
 	 };
 };
 echo 'Zborovi pogolemi od 7 karakteri: '.$d.'<br>';

$e=0;
 foreach($array as $z){
	if(strlen($z)==7){
		$e++ ;
 	 };
 };
 echo 'Zborovi ednakvi na 7 karakteri: '.$e.'<br>';

 $f = 0;
foreach($array as $z){
	if(strlen($z)<7){
		$f++ ;
 	 };
 };
 echo 'Zborovi pomali od 7 karakteri: '.$f.'<br>';

fclose($fh);
?>