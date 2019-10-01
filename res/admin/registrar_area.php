<?php 
require "res/admin/conexion.php";

 if(isset($_POST['area']) && isset($_POST['referente'])){
    $area=$_POST['area'];
    $referente=$_POST['referente'];

    $sql = "INSERT INTO areas (nombre, referente) 
        VALUES('$area','$referente')";
        $registrar = mysqli_query($conexion, $sql);
        if($registrar){
            echo "cargado correctamente";
            header("location: area.php");
        }else{
            echo mysqli_error($conexion);
        }
 }

?>
