<?php

// var_dump($_POST);
// echo '<br>';
// echo $_POST['prezime1'];
// echo '<br>';
// echo $_POST['prosek1'];
// echo '<br>';

$najdobar = max($_POST['prosek1'],$_POST['prosek2'],$_POST['prosek3'],$_POST['prosek4'],$_POST['prosek5']);
$najlos = min($_POST['prosek1'],$_POST['prosek2'],$_POST['prosek3'],$_POST['prosek4'],$_POST['prosek5']);

$a = $_POST['prosek1'];
$b = $_POST['prosek2'];
$c = $_POST['prosek3'];
$d = $_POST['prosek4'];
$e = $_POST['prosek5'];
$imeNajdobar = '';
$prezimeNajdobar = '';
$imeNajlos = '';
$prezimeNajlos = '';

switch($najdobar){
	case $a: $imeNajdobar = $_POST['ime1']; $prezimeNajdobar = $_POST['prezime1'];
	break;
	case $b: $imeNajdobar = $_POST['ime2']; $prezimeNajdobar = $_POST['prezime2'];
	break;
	case $c: $imeNajdobar = $_POST['ime3']; $prezimeNajdobar = $_POST['prezime3'];
	break;
	case $d: $imeNajdobar = $_POST['ime4']; $prezimeNajdobar = $_POST['prezime4'];
	break;
	case $e: $imeNajdobar = $_POST['ime5'];$prezimeNajdobar = $_POST['prezime5'];
}

switch($najlos){
	case $a: $imeNajlos = $_POST['ime1']; $prezimeNajlos = $_POST['prezime1'];
	break;
	case $b: $imeNajlos = $_POST['ime2']; $prezimeNajlos = $_POST['prezime2'];
	break;
	case $c: $imeNajlos = $_POST['ime3']; $prezimeNajlos = $_POST['prezime3'];
	break;
	case $d: $imeNajlos = $_POST['ime4']; $prezimeNajlos = $_POST['prezime4'];
	break;
	case $e: $imeNajlos = $_POST['ime5']; $prezimeNajlos = $_POST['prezime5'];
}


?>
<table border="1">
	<tr>
			<th>
				
			</th>
			<th>
				Ime
			</th>
			<th>
				Prezime
			</th>
		</tr>
		<tr>
			<td>Najdobar</td>
			<td><?=$imeNajdobar; ?></td>
			<td><?=$prezimeNajdobar; ?></td>
		</tr>
		<tr>
			<td>Najlos</td>
			<td><?=$imeNajlos; ?></td>
			<td><?=$prezimeNajlos; ?></td>
		</tr>
</table>