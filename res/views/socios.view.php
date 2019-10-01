
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSocio">
  Añadir un socio
</button>
<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
            <th>Nombre y apellido</th>
            <th>DNI</th>
            <th>Fecha Nacimiento</th>
            <th>Direccion</th>
            <th>Estado Civil</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Email</th>
            <th>Fundador</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    require "res/admin/conexion.php";
    $query ="SELECT * FROM socios";
    $mostrar = mysqli_query($conexion, $query);
    
    while($data = mysqli_fetch_assoc($mostrar)){
        
        echo "
        <tr>
        <td>".$data['nombre']." ".$data['apellido']."</td>
        <td>".$data['dni']."</td>
        <td>".$data['fecha_nacimiento']."</td>
        <td>".$data['direccion']."</td>
        <td>".$data['estado_civil']."</td>
        <td>".$data['telefono1']."</td>
        <td>".$data['telefono2']."</td>
        <td>".$data['email']."</td>
        <td>".$data['fecha_nacimiento']."</td>
        <td>".$data['fundador']."</td>
        <form method='post' action='res/admin/eliminar_socio.php?id=".$data['id_socio']."'>
        <td><button type='submit' class='btn btn-danger'>Eliminar</button></form></td>
        </tr>";
    }
    ?>
    </tbody>
  </table>
</div>

        </div>
    </div>
</div>
