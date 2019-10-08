<?php 
require "conexion.php";

$query ="SELECT * FROM comision";
$mostrar = mysqli_query($conexion, $query);

while($data = mysqli_fetch_assoc($mostrar)){
    echo "
    <tr>
    <td>".$data['nombre_apellido']."</td>
    <td>".$data['cargo']."</td>

    </tr>";
}


?>