<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_UDP );
socket_connect($socket,'192.168.184.11',9502);
$str ="这是一个UDP";
socket_send($socket,$str,strlen($str),MSG_DONTROUTE);
$buf = "";
$false = socket_read($socket,1024);
/*while (socket_recv($socket,$buf,1,MSG_DONTWAIT)){
    echo $buf.'\n';
}*/
echo $false;