<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD','root');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','PHP');

$dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not to connect to Mysql:'.mysqli_connect_error());

//设置默认客户端字符集：
mysqli_set_charset($dbc, 'utf8');
?>