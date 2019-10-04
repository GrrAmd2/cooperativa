<?php session_start();
require "res/admin/config.php";
require "functions.php";
//comprobar session
if (!isset($_SESSION['usuario'])){
    header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$user = iniciarSession('usuarios', $conexion);


if ($user['tipo_usuario'] == 'usuario') {
    $title = "Usuario"; 
    $nombre = $user['usuario'];
    require 'res/views/header.view.php';
    echo '<script>
    imagen = document.getElementById("ocultar");    
        padre = imagen.parentNode;
        padre.removeChild(imagen);
</script>';
    require 'res/views/usuario.view.php';
    require 'res/views/footer.view.php';
}else {
    header ('Location :'.RUTA.'index.php');
}

?>