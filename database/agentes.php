<?php
include("conexion.php");
 if (!$conexion) {
     die('No se logro realizar la conexión: ' . mysqli_error($conexion));
}else{
     mysqli_select_db($conexion,"agentes");
    $sql="SELECT * FROM agentes where Estado=1";//Consulta sql para obetener solos los agentes activos
    $result = mysqli_query($conexion, $sql);
}
?>