<?php
//检查数组所有的值是否为字符串
function check_strings_in_array($arr)
{
	return array_sum(array_map('is_string', $arr)) == count($arr);
}

$arr1 = array('PHP', 'JS', 'Python');
$arr2 = array('SQL', 200, 'MYSQL');

var_dump(check_strings_in_array($arr1));
var_dump(check_strings_in_array($arr2));
