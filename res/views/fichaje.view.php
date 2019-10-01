<?php require "res/admin/determinar_movimiento.php";?>
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">

    <form class="form-signin" action="fichaje.php" method="POST">

		
		<div style="text-align:center;color:red;font-weight:900"> <?php

  
                        if(isset($_GET["error"]))
                              {
                            ?>
                            <div class="alert alert-danger">
                             <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo "No hay empleado registrado con esa cedula "; ?> !
                         </div>
                         <?php
                     }
                      
                     ?>

<?php

 
                        if(isset($movimiento) and ($movimiento==0))
                        {
                            ?>
                             <div style="color:black">
                             <?php echo "Cedula: ".$cedula; echo "<br>"; ?>
                              <?php  echo "Nombre y Apellido: ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>";  ?>
                               <img src="admin/empleados/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                <?php echo "<br>"; ?>
                         </div>
                          <?php echo "<br>"; ?>
                            <div class="alert alert-success fade in">
                              <?php echo $tipo; echo ": "; echo $hora; ?> 
                         </div>
                         <?php
                     }
                      if(isset($movimiento) and ($movimiento==1))
                        {
                            ?>
                             <div  style="color:black">
                              <?php echo "Cedula: ".$cedula; echo "<br>"; ?>
                                 <?php  echo "Nombre y Apellido: ".$row["nombre"];  echo " ";  echo $row["apellido"]; echo "<br>"; ?>
                                  <img src="admin/empleados/fotos/<?php echo $row['foto']; ?>" class="img-rounded" width="64px" height="64px" />
                                  <?php echo "<br>"; ?>
                         </div>
                          <?php echo "<br>"; ?>
                            <div class="alert alert-danger fade in">
                                 <?php echo $tipo; echo ": "; echo $hora; ?> 
                         </div>
                         <?php
                     }
                    
                       
                     ?>

                     </div>  
                      <img style="width:128px" src="img/marcados.png"/> 
      <h2 class="form-signin-heading" style="color:black">MARCADO</h2>
      <input type="text" class="form-control" name="cedula" maxlength="8" onkeypress="return isNumberKey(event)" placeholder="Cedula" required="" autofocus="" />  
      <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>   
    </form>









    </div>
</div>
</div>
