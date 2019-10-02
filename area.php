<?php session_start();
require "res/admin/config.php";
require "functions.php";
require "res/admin/conexion.php";
//comprobar session
if (!isset($_SESSION['usuario'])){
    header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuarios', $conexion);

if ($admin['tipo_usuario'] == 'administrador') {
    $title="Administrador";
    $nombre = $admin['usuario'];
    require 'res/views/header.view.php';
    require 'res/views/areas.view.php';
    require 'res/views/footer.view.php';
}else if ($admin['tipo_usuario'] == 'usuario') {
    $title = "Usuario";
    $nombre = $admin['usuario'];
    require 'res/views/header.view.php';
    echo '<script>
    imagen = document.getElementById("ocultar");    
        padre = imagen.parentNode;
        padre.removeChild(imagen);
</script>';
    require 'res/views/areas.view.php';
    require 'res/views/footer.view.php';
}

?>
