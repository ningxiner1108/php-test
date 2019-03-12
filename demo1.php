<?php 
$num = 3.1415926;
$num2 = 3.6;

//直接取整，舍弃小数，保留整数
echo intval($num).'<br>';
echo intval($num2).'<br>';
echo '<hr>';

//四舍五入取整
echo round($num).'<br>';
echo round($num2).'<br>';
echo '<hr>';

//向上取整
echo ceil($num).'<br>';
echo ceil($num2).'<br>';
echo '<hr>';

//向下取整
echo floor($num).'<br>';
echo floor($num2).'<br>';
echo '<hr>';
?>