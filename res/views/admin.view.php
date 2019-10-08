
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
        <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-text"><?php
        require "res/admin/conexion.php";
        $mostrar_cantidad = "SELECT count(id_socio) as total FROM socios";
        $show = mysqli_query($conexion, $mostrar_cantidad);
        $data=mysqli_fetch_assoc($show);
        echo "Cantidad de socios: ".$data['total'];
        ?></h4>
      </div>
    </div>
  </div>
        </div>
        
        <div class="row">
        <div class="col-md-6">
          <div class="card card-primary collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Registrar Miembro</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <form action="res/admin/registrar_comi.php" method="post">
              <div class="form-group">
                <label for="inputName">Nombre y Apellido</label>
                <input type="text" id="inputName" name="nombre_apellido" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Cargo</label>
                <input type="text" id="inputName" name="cargo" class="form-control">

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
          <div class="card card-danger collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Eliminar Miembro</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <form action="res/admin/eliminar_comi.php" method="post">
              <div class="form-group">
                <label for="inputStatus">Area</label>
                <select class="form-control custom-select" name="id_area" required>
                  <option selected disabled>Seleccionar uno</option>
                  <?php 
                  require "res/admin/conexion.php";

                  $sql="SELECT * FROM comision ORDER BY id ASC";
                  $resultado = mysqli_query($conexion, $sql);
                  while($selectAreas= $resultado->fetch_assoc()){
                  echo "<option value='".$selectAreas['id']."'>".$selectAreas['nombre_apellido']."-".$selectAreas['cargo']."</option>";
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
      <h4 class="text-center">Comisión directiva</h4>
      <table class="table table-bordered table-hover" cellspacing="0" width="100%" id="dt_areas">
<thead>
  <tr>
    <th>Nombre y Apellido</th>
    <th>Cargo</th>
  </tr>
</thead>
<tbody>
  <tr>
  <?php include "res/admin/listar_comision.php"?>
  </tr>
</tbody>
      </table>
          </div>
    </div>
</div>
