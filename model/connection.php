<?php
$host = "localhost";
$user = "root";
$password = "";
$db ="registro_acciones";

$connection = new mysqli($host,$user, $password, $db);

    if ($connection->connect_errno){
        die ("Base de datos conectada correctamente" . $connection->connect_errno);
    }else{
    }