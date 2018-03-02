<?php
//function_testing

function sobiranje($a, $b){
	if(is_int($a) && is_int($b)){
		return $a + $b;
	}
		return null;
}

// echo sobiranje(2, '4');

function test_sobiranje(){
	$test_data = [
		['a' => 2, 'b' => 4, 'expected' => 6],
		['a' => 5, 'b' => 9, 'expected' => 14],
		['a' => -2, 'b' => 4, 'expected' => 2],
		['a' => 2, 'b' => -4, 'expected' => -2],
		['a' => '2', 'b' => 4, 'expected' => null],
		['a' => '2', 'b' => '4', 'expected' => null],
		['a' => 2, 'b' => '*4', 'expected' => null]
	];

	foreach ($test_data as $data) {
		if(sobiranje($data['a'], $data['b']) === $data['expected']){

			echo '<b style="color: green;">Passed!</b> ';
		}else{
			echo '<b style="color: red;">Failed!</b> ';
		}

			echo '(Input: '.$data['a'].', '.$data['b'].') ';
			echo '(Output: '.sobiranje($data['a'], $data['b']).') ';
			echo '(Expected: '.$data['expected'].')';
			echo '<br>';
		}
	}
	test_sobiranje();

//*******************************************************************
echo '<br>';
//genericka funkcija za testiranje


	function ftest($fn, $data){
		foreach ($data as $d) {
			$res = call_user_func_array($fn, $d['input']);
			// concatenate($a, $b,...)

			if($res === $d['expected']){
				echo '<b style="color: green;">Passed!</b> ';
			} else {
			echo '<b style="color: red;">Failed!</b> ';
		}
			echo '(Input: '.implode(', ', $d['input']).') ';
			echo '(Output: '.$res.') ';
			echo '(Expected: '.$d['expected'].')';
			echo '<br/>';
		}
	}


	$test_data = [
		['input' => [2, 4], 'expected' => 6],
		['input' => [5, 9], 'expected' => 14],
		['input' => [-2, 4], 'expected' => 2],
		['input' => [2, -4], 'expected' => -2],
		['input' => ['2', 4], 'expected' => null],
		['input' => [2, '4'], 'expected' => null],
		['input' => [2, '*4'], 'expected' => null],
		['input' => [4, '*5'], 'expected' => null],
		['input' => [1, '*8'], 'expected' => null]
	];

	ftest('sobiranje', $test_data);


function concatenate($a, $b, $c){
	return $a.$b.$c;
}

$test_data_cnc = [
	['input' => ['as', 'df', 'gh'], 'expected' => 'asdfgh'],
	['input' => ['as', '1', 'gh'], 'expected' => 'as1gh'],
	['input' => ['as', '', 'gh'], 'expected' => 'asgh'],
	['input' => ['as', 6, 'gh'], 'expected' => 'as6gh'],
];
echo'<br/>';

ftest('concatenate', $test_data_cnc);

echo '<br>';

function odzemanje($a, $b){
	if(is_int($a) && is_int($b)){
	return $a - $b;
}
	return null;
}

$test_data_odz = [
		['input' => [7, 6], 'expected' => 1],
		['input' => [2, 6], 'expected' => -4],
		['input' => [-10, 20], 'expected' => -30],
		['input' => ['7', -6], 'expected' => 1],
		['input' => ['a', 6], 'expected' =>null]
	];

	ftest('odzemanje', $test_data_odz);

?>