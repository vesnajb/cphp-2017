<?php 

	// if(isset($_POST['food'])){

	// 	foreach ($_POST['food'] as $f) {
	// 	echo $f.'<br>';


	// 	}}
	// // print_r($_POST['food']);

 // echo implode(',', $_POST['food']);
 $array = explode(" ", $_POST["t"]);

 $a = count($array);
 echo 'Broj na zborovi: '.$a.'<br>';



 $b = strlen( $_POST["t"]);
 echo 'Broj na karakteri: '.$b.'<br>';

$array2 = explode(". ", $_POST["t"]);
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

?>