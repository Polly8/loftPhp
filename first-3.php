<?php

// task 3

	$age = mt_rand(0, 100);

	if ($age > 18 && $age <= 65) {

		echo "Вам еще работать и работать";

	} elseif ($age > 1 && $age <= 17) {

		echo "Вам еще рано работать";

	} elseif ($age > 65) {

		echo "Вам пора на пенсию";

	} else {

		echo "Неизвестный возраст";
	}

?>