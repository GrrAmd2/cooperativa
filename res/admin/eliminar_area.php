<?php 
require "conexion.php";
require "config.php";
$id=$_REQUEST['id_area'];

$query = "DELETE FROM areas WHERE id_area = $id"; 
$resultado = $conexion->query($query);

if($resultado){
    header('Location:'.RUTA.'area.php');
}

?>
