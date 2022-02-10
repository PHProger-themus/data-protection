<?php

function abmodx($a, $b, $m)
{
	for($i = 0; $i < 10000; $i++) {
		if((($a * $i) - $b) % $m == 0)
		{
			return $i;
		}
	}
	return 'Решения нет';
}

echo abmodx(13, 5, 3) . "<br />"; // 2
echo abmodx(1, 6, 3) . "<br />"; // 0
echo abmodx(-90, 16, 3000) . "<br />"; // Нет решения
