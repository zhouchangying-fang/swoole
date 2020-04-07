<?php
$serv = new Swoole\Server("192.168.184.11", 9501);

$serv->on('Connect', function ($serv, $fd) {
    echo "Client: Connect.\n";
});
$serv->on('Receive', function ($serv, $fd, $from_id, $data) {
    $serv->send($fd, "收到你发的: ".$data);
});
$serv->on('Close', function ($serv, $fd) {
    echo "Client: Close.\n";
});
$serv->start();