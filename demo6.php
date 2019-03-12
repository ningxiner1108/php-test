<?php
//按键的方式对关联数组排序
$arr = array("b"=>"banana", "a"=>"apple", "d"=>"dog", "c"=>"cat");
$arr2 = array("3"=>"banana", "2"=>"apple", "5"=>"dog", "1"=>"cat");

ksort($arr);//正序
krsort($arr);//倒序
print_r($arr);