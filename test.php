<?php
require_once("cmd/mail.php");
//开启openssl
$flag = sendMail('823122131@qq.com','lsgo在线通知','恭喜你成功加入LSGO实验室，开启你的学习之旅吧！');
if($flag){
    echo "发送邮件成功！";
}else{
    echo "发送邮件失败！";
}
