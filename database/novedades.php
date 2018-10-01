<?php
include("conexion.php");
if (!$conexion) {
     die('No se logro realizar la conexión: ' . mysqli_error($conexion));
}else{
    mysqli_select_db($conexion,"novedades");
    $sql="SELECT * FROM novedades";
    $result = mysqli_query($conexion, $sql);
    if($result){
        $no = 1;
        while($row = mysqli_fetch_array($result)) {
        echo 
        '<tr>
        <th scope="row">'.$no.'</th>
        <td>' . $row['nombre'] . '</td>
        <td>' . $row['Id'] . '</td>
        <td>' . $row['categoria'] . '</td>
        <td>' . $row['duracion'] . '</td>
        <td>' . $row['descripcion'] . '</td>';
        if($row['id_Operaciones'] == 0){
            include("novedadesxagentes.php");
        }else{
            include("novedadesxoperaciones.php");
        }$no++;
        }mysqli_close($conexion);
    }else{
        echo "No se logró establecer la conexíón: " . mysqli_error($conexion)."<br>";
    }
}
?>