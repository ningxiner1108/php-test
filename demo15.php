<?php
//多位数组比较

$color1 = array(array('Red', 80), array('Green', 70), array('white', 60));
$color2 = array(array('Green', 70), array('Black', 95));

 // 用回调函数比较数据来计算数组的差集


$color = array_udiff($color1, $color2, 'new_color');

function new_color($a,$b)
{
	print_r(implode("",$a));die;
	return strcmp(implode("", $a), implode("", $b));
}

print_r($color);