<?php
// php按照数组的值来进行数组的排序
//按值的升序排序
$arr1 = array("西门"=>"29", "韦小宝"=>"25", "灭绝"=>"18", "朱老师"=>"32");
asort($arr1);
foreach ($arr1 as $k => $v) {
	echo "年龄：" . $k . "是：" . $v;
}

echo "<br>";


arsort($arr1);
foreach ($arr1 as $k => $v) {
	echo "年龄：" . $k . "是：" . $v;
}

echo "<br>";