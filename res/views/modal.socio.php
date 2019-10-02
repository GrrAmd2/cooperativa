<div class="modal fade" id="modalSocio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class=" modal-title " id="exampleModalLabel">Registrar a un socio nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="res/admin/cargar_socio.php" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="nombre">Nombre/s</label> 
        <input type="text" class="form-control" name="nombre" id=""> 
        </div>

        <div class="form-group col-md-6">
        <label for="apellido">Apellido/s</label> 
        <input type="text" class="form-control" name="apellido" id=""> 
        </div>
    </div>
        

<div class="form-row">
        <div class="form-group col-md-6">
        <label for="domicilio">Domicilio</label> 
        <input type="text" class="form-control" name="domicilio" id="" value="no acredita"> 
        </div>

        <div class="form-group col-md-6 ">
        <label for="dni">DNI</label> 
        <input type="number" class="form-control" name="dni" min="0" max="999999999" step="1"> 
        </div>
</div>
<div class="form-row">
        <div class="form-group col-md-6 ">
        <label for="edad">Estado Civil</label> 
        <select name="estado_civil" class="form-control">
        <option selected disabled>Seleccionar uno</option>
        <option value="Soltero/a">Soltero/a</option>
        <option value="Comprometido/a">Comprometido/a</option>
        <option value="En Relación ( más de 1 Año de noviazgo)">En Relación ( más de 1 Año de noviazgo)</option>
        <option value="Casado/a">Casado/a</option>
        <option value="Unión libre o unión de hecho">Unión libre o unión de hecho</option>
        <option value="Separado/a">Separado/a</option>
        <option value="Divorciado/a">Divorciado/a</option>
        <option value="Viudo/a">Viudo/a</option>
        <option value="Noviazgo(período inferior a 1 año de relación amorosa)">Noviazgo(período inferior a 1 año de relación amorosa)</option>
        </select>
        </div>
        <div class="form-group col-md-6 ">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="" class="form-control">        
        </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label for="telefono1">Telefono 1</label> 
        <input type="tel" class="form-control" name="telefono1" id=""> 
        </div>

        <div class="form-group col-md-6">
        <label for="telefono2">Telefono 2</label> 
        <input type="tel" class="form-control" name="telefono2" id=""> 
        </div>
        </div>

    
    <div class="form-group">
      <label for="email">Correo electronico</label>
           <input type="email" name="email" id="" class="form-control">
      </div>
      
      


        <div class="form-group">
        <label for="curso">Area a la que corresponde</label> 
        <select class="form-control custom-select" name="area">
                  <option selected disabled>Seleccionar uno</option>
                  <?php 
                  require "res/admin/conexion.php";

                  $sql="SELECT * FROM areas";
                  $resultado = mysqli_query($conexion, $sql);
                  while($selectAreas= $resultado->fetch_assoc()){
                  echo "<option value='".$selectAreas['nombre']."'>".$selectAreas['nombre']."</option>";
	}

                  ?>
        </select> 

        </div>  
        <div class="form-group">
        <label for="socio_fundador">Socio Fundador</label> 
        <select name="socio_fundador" class="form-control">
        <option selected disabled>Seleccionar uno</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
        </select>
        </div>
        <div class="form-group">
        <label for="socio_fundador">Referente</label> 
        <select name="referente" class="form-control">
        <option selected disabled>Seleccionar uno</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
        </select>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-primary">Limpiar</button>
        </form>
      </div>
    </div>
  </div>
</div>