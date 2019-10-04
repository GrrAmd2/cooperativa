<?php 
include "conexion.php";

$usuario = $_POST['usuario'];
$passwordA = $_POST['passwordA'];
$passwordA = hash('sha512', $passwordA);
$rol = $_POST['rol'];

$sql = "INSERT INTO usuarios(usuario, password, tipo_usuario) VALUES ('$usuario', '$passwordA', '$rol')";
$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("location: ../../index.php");
}else{
    echo mysqli_error($conexion);
}
?>