<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

        <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Registrar Area</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <form action="res/admin/registrar_area.php" method="post">
              <div class="form-group">
                <label for="inputName">Nombre del area</label>
                <input type="text" id="inputName" name="area" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Referente</label>

<select class="form-control custom-select" name="referente">

                  <option selected disabled>Seleccionar uno</option>
                  <?php 
          require "res/admin/conexion.php";
                $sql2 = "SELECT * FROM socios WHERE referente = 'Si'";
                $resultadoReferente = mysqli_query($conexion, $sql2);
                while($rows=mysqli_fetch_array($resultadoReferente)){
                  echo "<option value='".$rows[1]." ".$rows[2]."'>".$rows[1]." ".$rows[2]."</option>";

                  }
                  ?>
                </select>
              </div>
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Registrar</button>
</form>
          </div>
          </div>
          
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Eliminar Area</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <form action="res/admin/eliminar_area.php" method="post">
              <div class="form-group">
                <label for="inputStatus">Area</label>
                <select class="form-control custom-select" name="id_area" required>
                  <option selected disabled>Seleccionar uno</option>
                  <?php 
                  require "res/admin/conexion.php";

                  $sql="SELECT * FROM areas";
                  $resultado = mysqli_query($conexion, $sql);
                  while($selectAreas= $resultado->fetch_assoc()){
                  echo "<option value='".$selectAreas['id_area']."'>".$selectAreas['nombre']."</option>";
	}

                  ?>
                </select>
              </div>
              
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-danger">Eliminar</button></form>
          </div>
          </div>
          
          <!-- /.card -->
        </div>
      </div>
      <table class="table table-bordered table-hover" cellspacing="0" width="100%" id="dt_areas">
<thead>
  <tr>
    <th>ID Area</th>
    <th>Area</th>
    <th>Referente del Area</th>
  </tr>
</thead>
<tbody>
  <tr>
  <?php include "res/admin/listar_areas.php"?>
  </tr>
</tbody>
      </table>
      
        </div>
    </div>
</div>
