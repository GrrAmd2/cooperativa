<?php 
require "conexion.php";
require "config.php";
echo $_REQUEST['id'];

$sql = "DELETE FROM socios WHERE id_socio = '".$_REQUEST['id']."'";
$resultado = mysqli_query($conexion, $sql);
if($resultado){
    header('location:'.RUTA. 'socios.php');
}
?>