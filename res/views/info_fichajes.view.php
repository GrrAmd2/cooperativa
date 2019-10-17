
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">DNI</th>
      <th scope="col">NOMBRE Y APELLIDO</th>
      <th scope="col">HORA</th>
      <th scope="col">FECHA</th>
      <th scope="col">TIPO</th>

    </tr>
  </thead>
  <tbody>

      <?php
      require "res/admin/conexion.php";
      $sql2 = "SELECT * FROM marcados ORDER BY id DESC";
      $result = mysqli_query($conexion, $sql2);
      while($row = $result->fetch_assoc()){
        if($row['tipo']=="Entrada"){
          $color = "table-success";
        }elseif($row['tipo'] == "Salida"){
          $color ="table-danger";
        }
          echo "<tr class= '$color'>";
          echo "<td>".$row['cedula']."</td>";
        
          echo "<td>".$row['nombre_apellido']."</td>";
          echo "<td>".substr($row['fecha_hora'], 11)."</td>";
          echo "<td>".$row['tipo']."</td>";
          echo "<td>".$row['fecha']."</td>";
          echo "</tr>";
      }

      ?>
 
  </tbody>
</table>

      </div>
</div>
</div>
