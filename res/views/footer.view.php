 <!-- Main Footer -->
 <footer class="main-footer">
    <strong>Copyright &copy; E.J. Developers</strong>
    Todos los derechos reservados

  </footer>
</div>
<!-- ./wrapper -->
<?php include "res/views/password.view.php"; ?>
<?php include "res/views/usuario.modal.php"; ?>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="res/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="res/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="res/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="res/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="res/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="res/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="res/plugins/raphael/raphael.min.js"></script>
<script src="res/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="res/plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="res/plugins/chart.js/Chart.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="res/dist/js/pages/dashboard2.js"></script>

<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
</body>
</html>