<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP );
socket_connect($socket,'192.168.184.11',9501);
$str ="这是一个发送信息";
socket_send($socket,$str,strlen($str),MSG_DONTROUTE);
$buf = "";
$false = socket_read($socket,strlen('收到你发的: '.$str));
/*while (socket_recv($socket,$buf,1,MSG_DONTWAIT)){
    echo $buf.'\n';
}*/
echo $false;