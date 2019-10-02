<?php 
require "conexion.php";
require "config.php";

 if(isset($_POST['area']) && isset($_POST['referente'])){
    $area=$_POST['area'];
    $referente=$_POST['referente'];

    $sql = "INSERT INTO areas (nombre, referente) 
        VALUES('$area','$referente')";
        $registrar = mysqli_query($conexion, $sql);
        if($registrar){
            echo "cargado correctamente";
            header('location:'.RUTA. 'area.php');
        }else{
            echo mysqli_error($conexion);
        }
 }

?>
