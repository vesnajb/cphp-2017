<?php 

echo "<h1>Hello World</h1>";
$ime = '<h2>Vesna</h2>';
echo $ime;
$prezime = 'Bugarski';
?>

<div>
	<!-- <h1>Zdravo <?='Zdravo Svetu!' ?></h1> -->
	<h1>Zdravo <?php echo $prezime; ?></h1>
	<p>Lorem ipsum</p>
</div>


<?php

$string = "Lorem ipsum";
$integer = 10;
$float = 3.14;
$boolean = false;

echo $integer;
echo '</br>';
echo $float;
echo '</br>';
echo $boolean;
echo '</br>';

$a = 10;
$b = 3;

echo $a + $b;
echo '</br>';
echo $a - $b;
echo '</br>';
echo $a * $b;
echo '</br>';
echo $a / $b;
echo '</br>';
echo $a % $b; // modul
echo '</br>';


function foo($a, $b){
	return $a + $b;
}

echo foo(13,10);
echo "</br>";


// echo ubav_den("ponedelnik");//losh den (10 karakteri)
// echo ubav_den("vtornik");//ubav den (7 lkarakteri)

$den = "";

function ubav_den($den){
	if(strlen($den) % 2 == 0){
		return 'Losh den';
	} else{
		return 'Ubav den';
	}
}

echo ubav_den('sreda');
echo "</br>";
echo ubav_den("ponedelnik");
echo "</br>";
echo ubav_den("vtornik");
echo "</br>";
echo ubav_den("chetvrtok");
echo "</br>";
echo ubav_den("petok");
echo "</br>";

$c= 8;
$d = 75;
$e = 92;

if($c = $d && $e % 2 == 0 || $c + $e == 100){
	echo 'Vistina';
}else{
	echo 'Nevistina';
}
echo "</br>";


$broj = 2;
$karakter = '2';


if($broj == $karakter){
	echo 'Broj == Karakter';
} else{
	echo 'Broj != Karakter';
}

echo '</br>';

$jazik ='Ruby';

switch($jazik){
	case 'php': 
		echo 'Znam php';
		break;
	case 'JS':
		echo 'Znam JS';
		break;
	default:
		echo 'Ne go znam ovoj jazik';
		break;
}

echo '</br>';
for($i=0; $i<100; $i++){
	if($i%2==0){
		echo $i. ', '; // . sluzi za konkatenacija (spojuvanje)
		// echo '</br>';
	}
}
echo '</br>';

$p = 0;
$b = 0;
while($p < 100){
		if($p % 2 ==1){
		$b++;
		if($b == 3){
			echo $p.', ';
			$b = 0;
		}
	} 
	$p++;
}

echo '</br>';

$niza = ['pero', 'janko', 'stanko'];
$br = count($niza);

for($i=0; $i<$br; $i++){
	echo $niza[$i].', ';
}
echo '</br>';

foreach ($niza as $index => $value) {
	echo $index.' = '.$value.'</br>';
}
foreach ($niza as $value) {
	echo $value.'</br>';
}

?>

