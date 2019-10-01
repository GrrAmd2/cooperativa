<?php 
require "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$domicilio = $_POST['domicilio'];
$dni = $_POST['dni'];
$estado_civil = $_POST['estado_civil'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$telefono1 = $_POST['telefono1'];
$telefono2 = $_POST['telefono2'];
$email = $_POST['email'];
$area = $_POST['area'];
$socio_fundador = $_POST['socio_fundador'];

$sql = "INSERT INTO socios(nombre, apellido, dni, fecha_nacimiento, direccion, estado_civil, telefono1, telefono2, email, area, fundador) VALUES ('$nombre','$apellido','$dni','$fecha_nacimiento','$domicilio','$estado_civil','$telefono1','$telefono2','$email','$area','$socio_fundador')";
$resultado = mysqli_query($conexion, $sql );


if($resultado){
    header('location: http://192.168.1.163/login/socios.php');
}else{
    echo mysqli_error($conexion);
}
?>