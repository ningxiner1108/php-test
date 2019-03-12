<?php
//php实现发送邮件
// mail — 发送邮件

$message = "Line 1\nLine 2\nLine 3";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70);

// Send
mail('caffinated@example.com', 'My Subject', $message);