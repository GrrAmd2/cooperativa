<?php 
require "conexion.php";
require "config.php";

 if(isset($_POST['nombre_apellido']) && isset($_POST['cargo'])){
    $cargo=$_POST['cargo'];
    $nombre_apellido=$_POST['nombre_apellido'];

    $sql = "INSERT INTO comision (nombre_apellido, cargo) 
        VALUES('$nombre_apellido','$cargo')";
        $registrar = mysqli_query($conexion, $sql);
        if($registrar){
            echo "cargado correctamente";
            header('location:'.RUTA. 'index.php');
        }else{
            echo mysqli_error($conexion);
        }
 }

?>
