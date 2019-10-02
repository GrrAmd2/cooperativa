<?php 
require "conexion.php";

$query ="SELECT * FROM areas";
$mostrar = mysqli_query($conexion, $query);

while($data = mysqli_fetch_assoc($mostrar)){
    
    echo "
    <tr>
    <td>".$data['id_area']."</td>
    <td>".$data['nombre']."</td>
    <td>".$data['referente']."</td>

    </tr>";
}


?>