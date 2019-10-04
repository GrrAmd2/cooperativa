<div class="modal fade" id="usuarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR LA CONTRASEÑA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="res/admin/añadir_usuario.php" method="post">


        <label for="usuario">Nombre de Usuario</label>
        <input type="text"
          class="form-control" name="usuario" id="" aria-describedby="helpId" placeholder="">

        <label>Ingrese Contraseña</label>
        <div class="input-group">
      <input ID="txtPassword" type="Password" name="passwordA" Class="form-control">
      <div class="input-group-append">
            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
    </div>
    <div class="form-group" hidden>
      <label for=""></label>
      <input type="text"
        class="form-control" name="id" id="" aria-describedby="helpId" placeholder="" value="<?= $id?>">
      <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <label for="rol">Tipo de usuario</label>
    <select class="form-control" name="rol" id="tipo_usuario">
    <option value="administrador">Administrador</option>
    <option value="usuario">Usuario</option>
  </select>
  </div>  
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button></form>
      </div>
    </div>
  </div>
</div>

