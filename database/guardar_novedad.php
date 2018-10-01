<?php
include("conexion.php");
//Captura de datos enviados desde el formulario
$nombre = $_POST['nombre'];
$fecha_inicio = $_POST['datetime'];
$fecha_cierre = $_POST['datetime2'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$operaciones = $_POST['operaciones'];
$agentes = $_POST['agentes'];
    if($fecha_cierre >= $fecha_inicio){
        $f = str_replace('/', '-', $fecha_inicio);
        $fechai_formato = date('Y-m-d H:i:s', strtotime($f));//Dar formato esperado a las fechas obtenidas
        $f1 = str_replace('/', '-', $fecha_cierre);
        $fechac_formato = date('Y-m-d H:i:s', strtotime($f1));
        //Insertar datos en la base de datos
        $query = "INSERT INTO novedades(nombre, fecha_inicio, fecha_cierre, duracion, categoria, descripcion, id_Operaciones, id_Agentes) VALUES('$nombre', '$fechai_formato', '$fechac_formato', TIMEDIFF('$fechac_formato','$fechai_formato'), '$categoria', '$descripcion', '$operaciones', '$agentes')";
        $resultado = $conexion->query($query);
        if($resultado){//validación de la conexión 
            echo "Novedad Registrada";
            header("Status: 301 Moved Permanently");
            header("refresh:1; url=http://localhost:8080/likeu/index.php");
            exit;
        }
        else{
            die('No se logro realizar la conexión: ' . mysqli_error($conexion));
        }
    }else{
        echo "Lo sentimos la fecha de inicio no puede se mayor que la fecha de cierre";
    }
 
?>