<?php

function chinese($nums, $rems)
{
	$an = explode(',', $nums);
	$ar = explode(',', $rems);
	$x = 1;
	$count = count($an);
	
    while (true) {
		
		if($x == 1000) {
			$x = 'Решения нет';
			break;
		}
		
        for ($j = 0; $j < $count; $j++) {
			if ($x%$an[$j] != $ar[$j]) {
				break;
			}
		}

        if ($j == $count) {
			return $x;
		}

        $x++;
		
    }

    return $x;
}

echo chinese('1020,1020,1020', '204,60,85'); // Нет решения
