
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">DNI</th>
      <th scope="col">HORA</th>
      <th scope="col">FECHA</th>
      <th scope="col">TIPO</th>

    </tr>
  </thead>
  <tbody>

      <?php
      require "res/admin/conexion.php";
      $sql2 = "SELECT * FROM marcados";
      $result = mysqli_query($conexion, $sql2);
      while($row = $result->fetch_assoc()){
          echo "<tr>";
          echo "<td>".$row['cedula']."</td>";
          echo "<td>".$row['fecha_hora']."</td>";
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
