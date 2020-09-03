<?php

$servidor = 'localhost';
$user = 'root';
$contraseña = '123Tineo';
$db = 'CRUD';

$conexion = new mysqli($servidor, $user, $contraseña, $db);

if($conexion->connect_error){
    echo 'Error al conectarse en la Base de Datos ' .$conexion->error;
}
else{
    $conexion->set_charset("utf8");
   // echo "Conexión exitosa";
}