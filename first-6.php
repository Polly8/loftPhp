<?php

	echo '<table border="1" cellpadding="20" align="center" cellspacing="0">';


	for ($x=1; $x <= 10; $x++) {

		echo '<tr>';

		for ($y=1; $y <= 10; $y++){

			if ($x%2 && $y%2){

				echo '<td align="center">' . '[' . $y*$x . ']' . '</td>';

			}elseif ($x%2 || $y%2) {

				echo '<td align="center">' . $y*$x . '</td>';

			}else {
				echo '<td align="center">' . '(' . $y*$x . ')' . '</td>';
			}

		}

		echo '</tr>';
	}

	echo '</table>';



?>