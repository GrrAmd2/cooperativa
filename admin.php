
<?php session_start();
require "res/admin/config.php";
require "functions.php";
//comprobar session
if (!isset($_SESSION['usuario'])){
    header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuarios', $conexion);

if ($admin['tipo_usuario'] == 'administrador') {
    $title="Administrador";
    $id = $admin['id'];
    $nombre = $admin['usuario'];
    require 'res/views/header.view.php';
    require 'res/views/admin.view.php';
    require 'res/views/footer.view.php';
}else {
    header ('Location :'.RUTA.'index.php');
}

?>
