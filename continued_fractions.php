<?php

function cf($n, $d)
{
	$rem = $d;
	$num = $n;
	$ds = [];
	
	while ($rem != 0) {
		$ds[] = (int)($num / $rem);
		$den = $rem;
		$rem = $num % $rem;
		$num = $den;
	}
	
	echo "[" . implode(', ', $ds) . "]";
}

echo cf(3, 19);
