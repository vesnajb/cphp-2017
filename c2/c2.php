<?php

$niza = ['pero', 'janko', 'stanko', 'branko', 'aleksandar', 'brankica', 'ana', 'nikolina', 'petar', 'aleksandra'];

foreach($niza as $value){
	if(strlen($value) > 7){
		echo $value.'<br>';
	}
}
echo '<br>';

$student = [	//asocijativna niza
	'Vesna', 'Bugarski', 8
];
echo $student[0];

echo '<br>';

$student = [	//asocijativna niza
	'ime' => 'Vesna', 
	'prezime' => 'Bugarski', 
	'prosek' => 8
];
echo $student['ime'];
echo '<br>';

echo '<ul>';

foreach ($student as $key => $value) {
	echo '<li>';
	echo '<b>'.$key.':'.'</b>';
	echo $value;
	echo '</li>';

	// echo '<li><b>'.$key.': </b>'.$value.'</li>';
}
echo '</ul>';
echo '<br>';



?>

<ul>	
	<?php foreach($student as $k => $v){ ?>
		<li>
			<b>
			<?=$k ?>: 
			</b>
			<?=$v ?>
		</li>
	<?php } ?>
</ul>

<ul>	
	<?php foreach($student as $k => $v){ ?>
		<li>
			<b>
				<?php echo $k ?>: 
			</b>
				<?php echo $v ?>
		</li>
	<?php } ?>
</ul>


<?php
	
	$studenti = [
		['Pero', 'Perovski'],
		['Ivan', 'Ivanovski'],
		['Janko', 'Jankvoski'],

	];

	echo $studenti[1][1].'<br>';
	echo $studenti[2][0].'<br>';
	echo $studenti[0][1].'<br>';

echo '<br>';

	$studenti = [
		['ime' => 'Pero', 'prezime' => 'Perovski'],
		['ime' => 'Ivan', 'prezime' => 'Ivanovski'],
		['ime' => 'Janko', 'prezime' => 'Jankvoski'],

	];

	echo $studenti[1]['prezime'].'<br>';
	echo $studenti[2]['ime'].'<br>';
	echo $studenti[0]['prezime'].'<br>';
echo '<br>';

?>

<table border="1">
	<tr>
			<th>
				Ime
			</th>
			<th>
				Prezime
			</th>
		</tr>
		<?php foreach($studenti as $student){ ?>
		<tr>
			<td><?=$student['ime']; ?></td>
			<td><?=$student['prezime']; ?></td>
		</tr>
	<?php } ?>
</table>

<?php echo '<br>';?>

<table border="1">
	<tr>
			<?php foreach ($studenti[0] as $k => $v) { ?> <!-- $student = $studenti[0]; $student = $studenti[1] -->
				<th><?=$k?></th>
			<?php } ?>
		</tr>
		<?php foreach($studenti as $student){ ?>
		<tr>
			<td><?=$student['ime']; ?></td>
			<td><?=$student['prezime']; ?></td>
		</tr>
	<?php } ?>
</table>

