<?php

// task 5

	$cars = [
		'bmw' => [
			'model' => 'X5',
			'speed' => 120,
			'doors' => 5,
			'year' => '2015'
		],

		'toyota' => [
			'model' => 'vitz',
			'speed' => 150,
			'doors' => 5,
			'year' => '2002'
		],

		'opel' => [
			'model' => 'astra',
			'speed' => 120,
			'doors' => 5,
			'year' => '2006'
		],
	];



	foreach ($cars as $key => $value) {
		echo $key;
		echo '<br>';

		if (is_array($value)){
			foreach ($value as $item){
				echo $item . ' ';
			}
		}

		echo '<br>';
	}


?>