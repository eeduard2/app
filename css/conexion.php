<?php

$server     = 'mysql.webcindario.com'; //servidor
$username   = 'eeduard2'; //usuario de la base de datos
$password   = 'eduardo1989'; //password del usuario de la base de datos
$database   = 'eeduard2'; //nombre de la base de datos
 
$conexion = new mysqli($server, $username, $password, $database);
if($conexion->connect_errno > 0){die('Imposible conectar [' . $conexion->connect_error . ']');}


?>