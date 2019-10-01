<?php 
require "conexion.php";

$id=$_REQUEST['id_area'];

$query = "DELETE FROM areas WHERE id_area = $id"; 
$resultado = $conexion->query($query);

if($resultado){
    header('Location: area.php');
}

?>
