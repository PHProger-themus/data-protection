<?php

function Lejandr($a, $p)
{
	$lej = 0;
	
	if ($a % $p == 0) {
		$lej = 0;
	} else {
		for ($x = 1; $x < 1000; $x++) {
			if ($x * $x - $a % $p == 0) {
				$lej = 1;
			}
		}
		if ($lej != 1) {
			$lej = -1;
		}
	}
	
	return $lej;
}

$a = 7;
$b = 13;
$jacob = 1;
$dividers = [];
$div_count = 0;

echo Lejandr($a, $b);
echo "<br />";

if ($b % 2 == 1) {
	while ($b > 1) {
		for ($i = 3; $i < 100; $i++) {
			$isPrime = false;
			for ($m = 2; $m < $i; $m++) {
				if ($m % $i == 0) {
					$isPrime = false;
					break;
				} else {
					$isPrime = true;
				}
			}
			if ($isPrime) {
				if ($b % $i == 0) {
					$dividers[] = $i;
					$div_count++;
					$b /= $i;
					$i = 3;
				}
			}
		}
	}
	
	for ($i = 0; $i < $div_count; $i++) {
		$jacob *= Lejandr($a, $dividers[$i]);
	}
	echo $jacob;
} else {
	echo "Число B должно быть нечетным";
}
