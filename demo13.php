<?php
// php删除数组元素数组键值重新排序
$x = array(1, 2, 3, 4, 5);
var_dump($x);
unset($x[3]);
var_dump($x);

$x = array_values($x);
var_dump($x);