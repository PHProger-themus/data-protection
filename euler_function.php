<?php

function euler($n)
{
	$result = $n;
	
	for ($i = 2; ($i * $i) <= $n; ++$i) {
		if ($n % $i == 0) {
			while ($n % $i == 0) {
				$n /= $i;
			}
			$result -= $result / $i;
		}
	}	
	
	if ($n > 1) {
		$result -= $result / $n;
	}
		
	return $result;
}

echo euler(3) . "<br />"; // 2
echo euler(4) . "<br />"; // 2
echo euler(5) . "<br />"; // 4
