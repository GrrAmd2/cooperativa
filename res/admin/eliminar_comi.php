<?php 
require "conexion.php";
require "config.php";
$id=$_REQUEST['id_area'];

$query = "DELETE FROM comision WHERE id = $id"; 
$resultado = $conexion->query($query);

if($resultado){
    header('Location:'.RUTA.'index.php');
}

?>
