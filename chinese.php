<?php

function chinese($nums, $rems)
{
	$arNums = explode(',', $nums);
	$arRems = explode(',', $rems);
	if(count($arNums) != count($arRems))
	{
		return 'Количество чисел m должно быть равно количеству r';
	}
	$arParams = [];
	$m0 = 1;
	foreach($arRems as $key => $m)
	{
		$m0 *= $m;
		$arParams['a'][] = $arNums[$key];
		$arParams['m'][] = $arRems[$key];
	}
	unset($key);
	for($i = 0; $i < count($arRems); $i++)
	{
		$arParams['n'][] = $m0 / $arParams['m'][$i];
	}
	foreach($arParams['n'] as $key => $n)
	{
		$arParams['y'][$key] = 0;
		$resFound = 0;
		while ($resFound == 0)
		{
			$arParams['y'][$key]++;
			if ((($arParams['n'][$key] * $arParams['y'][$key] - $arParams['a'][$key]) % $arParams['m'][$key]) == 0)
			{
				$resFound = 1;
			}
			if ($arParams['y'][$key] == 1000)
			{
				break;
			}
		}
	}
	$result = 0;
	foreach($arParams['n'] as $key => $n)
	{
		$result += $n * $arParams['y'][$key];
	}
	return $result % $m0;
}

echo chinese('2,15,5', '5,17,12'); // 797
