<?php
include("conexion.php");
 if (!$conexion) {
     die('No se logro realizar la conexión: ' . mysqli_error($conexion));
}else{
    mysqli_select_db($conexion,"novedades");
    $sql="SELECT * FROM novedades";
    $result = mysqli_query($conexion, $sql);
}
?>