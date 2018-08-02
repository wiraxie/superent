<?php

$md5 = md5('4b4c66bb63adcd921827b8acdbcb6e75' . time() . $_SERVER['HTTP_USER_AGENT']);
$time = time();

echo "md5 : ".$md5;
echo "time : ". $time;

?>