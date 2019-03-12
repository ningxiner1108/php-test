<?php
//php随机化数组元素
$numbers = range(1, 10);
// var_dump($numbers);

shuffle($numbers);
foreach ($numbers as $value) {
	echo "$value".'<br>';
}