<?php

require "conexion.php";
$id = $_POST['id'];
$passwordA = $_POST['passwordA'];

$passwordA= hash('sha512', $_POST['passwordA']);



$sql_actualizar = "UPDATE usuarios SET password='".$passwordA."' WHERE id = $id";
echo $sql_actualizar;
$resultado = mysqli_query($conexion, $sql_actualizar);

if($resultado){

    header('Location: ../../index.php');
}else{
    echo mysqli_error($conexion);
}
?>