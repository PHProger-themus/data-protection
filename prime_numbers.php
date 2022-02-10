<?php

function prime($n)
{
	for($x = 2; $x <= sqrt($n); $x++) {
		if($n % $x == 0) {
			return 'Число не является простым';
		}
	}
	return 'Число - простое';
}

echo prime(13) . "<br />"; // True
echo prime(27) . "<br />"; // False
