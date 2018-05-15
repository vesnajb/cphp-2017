<?php

	$string_as_xml = "
		<professor>
			<ime> Vesna </ime>
			<prezime> Janakievska </prezime>
			<godini> 34 </godini>
		</professor>

	";

	$object_as_xml = simplexml_load_string($string_as_xml);

	echo "<pre>";
	print_r($object_as_xml);
	echo "</pre>";

	// echo "<pre>";
	// print_r($object_as_xml);
	// echo "</pre";

	echo $object_as_xml->prezime;
	echo "<br>";


	$string_as_xml = "
		<profesori>
			<profesor>
				<ime> Petar </ime>
				<prezime> Petrovski </prezime>
				<godini> 30 </godini>
			</profesor>
			<profesor>
				<ime> Janko </ime>
				<prezime> Jankovski </prezime>
				<godini> 34 </godini>
			</profesor>
		</profesori>

	";

	$object_as_xml = simplexml_load_string($string_as_xml);

	echo "<pre>";
	print_r($object_as_xml);
	echo "</pre>";

	echo $object_as_xml->profesor[1]->prezime;
	echo "<br>";


	$to_echo = '';
	foreach ($object_as_xml as $value) {
		$to_echo .= $value->ime . ", ";
	}
	echo rtrim($to_echo, ', ');



	$to_arr = [];
	foreach ($object_as_xml as $value) {
		$to_arr[] = $value->ime;
	}
	echo '<br>';
	echo  implode(', ', $to_arr);
?>