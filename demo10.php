<?php
$a = true;
$b = 8;
$c = '8';

if ($a == $b) {
	echo "相等";
} else {
	echo "不相等";
}

echo "<br>";

if ($a === $b) {
	echo "相等";
} else {
	echo "不相等";
}

echo "<br>";

if ($b == $c) {
	echo "相等";
} else {
	echo "不相等";
}

echo "<br>";

var_dump($b);
if ($b = $c) {
	echo "相等";
} else {
	echo "不相等";
}
var_dump($b);

// = 赋值
// == 等于 比较
// === 完全等于 值和类型完全等于