<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP );
socket_connect($socket,'127.0.0.1',9501);
$str ="这是一个发送信息";
socket_send($socket,$str,strlen($str),MSG_DONTROUTE);
$buf = "";
$false = socket_recv($socket,$buf,2048,MSG_DONTWAIT);
/*while (socket_recv($socket,$buf,1,MSG_DONTWAIT)){
    echo $buf.'\n';
}*/
echo $buf;
socket_close($socket);