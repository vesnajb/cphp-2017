<?php
$string_as_json = '
	{
		"professor": 
		{
				"ime" : "Vesna",
				"prezime" : "Janakievska",
				"godini" : 34,
				"jazici" : ["PHP", "SQL", "JavaScript"]
		}

	}';

	$object_as_json = json_decode($string_as_json);

	echo "<pre>";
	print_r($object_as_json);
	echo "</pre>";

	echo $object_as_json->professor->jazici[1];
	echo '<br>';

	$array_as_json = json_decode($string_as_json, true);
	echo "<pre>";
	print_r($array_as_json);
	echo "</pre>";

	echo $array_as_json['professor']['jazici'][2];

	$array_nekojsi = ['ime' => 'Vesna', 
					'prezime' => 'Janakievska',
					'godini' => 34
				];

	$nekojsi_json = json_encode($array_nekojsi);
	echo $nekojsi_json;


?>