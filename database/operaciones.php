<?php
include("conexion.php");
    if (!$conexion) {
        die('No se logro realizar la conexión: ' . mysqli_error($conexion));
    }else{
        mysqli_select_db($conexion,"operaciones");
        $sql="SELECT * FROM operaciones";
        $result = mysqli_query($conexion, $sql);
        if($result){
            $no = 1;
            while($row = mysqli_fetch_array($result)) {
                echo '<option value="'.$no.'">' . $row['Nombre'] . '</option>';
                $no++;
            }mysqli_close($conexion);
        }else{
            echo "Query failed with error: " . mysqli_error($conexion)."<br>";
        }
    }
?>