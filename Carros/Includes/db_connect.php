<?php
$serverName = "127.0.0.1";
$userName = "root";
$password = "base";
$dbName = "php";

$connect = mysqli_connect($serverName, $userName, $password, $dbName);
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;