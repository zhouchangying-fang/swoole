<?php
$name = gethostname();
$a = gethostbynamel("www.baidu.com");
p($a);
function p($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    return;
}