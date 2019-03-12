<?php 
//两个数组合并，一个作为键，一个作为值
$arr = ['姓名', '年龄', '性别'];
$arr1 = ['hello', '25', '女'];

var_dump(array_combine($arr, $arr1));
?>