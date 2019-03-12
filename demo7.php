<?php
//php输出html实体

$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);
echo "<br>";
echo htmlspecialchars_decode($str, ENT_QUOTES);// - 解码双引号和单引号。
?>