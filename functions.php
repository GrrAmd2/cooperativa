    <?php 
    
    function conexion($bd_config){
        try{
            //Estructura de pdo 
            //$variable = new PDO('mysql:host=localhost;dbname=nombre_de_bbdd','usuario','password');
            $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['db_name'], $bd_config['user'], $bd_config['pass']);
            return $conexion;
        }catch(PDOException $e){
            return false;
        }
    }

    function limpiarDatos($datos){
        $datos = trim($datos);
        $datos = htmlspecialchars($datos);
        $datos = filter_var($datos, FILTER_SANITIZE_STRING);

        return $datos;
    }

    function iniciarSession($table, $conexion){
        $statement = $conexion ->prepare("SELECT * FROM $table WHERE usuario = :usuario"); 
        $statement -> execute([
            ':usuario' => $_SESSION['usuario']
        ]);
        return $statement -> fetch(PDO::FETCH_ASSOC);
    }
    ?>
    