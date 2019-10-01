<?php 

$usuario = "root";
$pass = "";
$server = "localhost";
$db_name = "cooperativa";

$conexion = mysqli_connect($server, $usuario, "") or die ("No se pudo conectar a la base");
$db = mysqli_select_db($conexion, $db_name) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

?>