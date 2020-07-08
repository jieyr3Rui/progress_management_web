<?php
$to = "2930681195@qq.com";         // 邮件接收者
$subject = "e-mail test";                // 邮件标题
$message = "Hello! 这是邮件的内容。";  // 邮件正文
$from = "jieyr3@mail2.sysu.edu.cn";   // 邮件发送者
$headers = "From:" . $from;         // 头部信息设置
mail($to,$subject,$message,$headers);
echo "邮件已发送";
?>