<?php

function cf($input_numerator, $input_denominator)
{
	$remainder = $input_denominator;
	$numerator = $input_numerator;
	$fraction = [];
	
	while ($remainder != 0) {
		$fraction[] = (int)($numerator / $remainder);
		$denominator = $remainder;
		$remainder = $numerator % $remainder;
		$numerator = $denominator;
	}
	
	echo "[" . implode(', ', $fraction) . "]";
}

echo cf(3, 19);
