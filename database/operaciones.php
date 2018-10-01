<?php
include("conexion.php");
    if (!$conexion) {
        die('No se logro realizar la conexión: ' . mysqli_error($conexion));
    }else{
        mysqli_select_db($conexion,"operaciones");
        $sql="SELECT * FROM operaciones";
        $result = mysqli_query($conexion, $sql);
    }
?>