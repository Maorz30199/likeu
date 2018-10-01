<?php 
    mysqli_select_db($conexion,"agentesxoperaciones");
    $sql2="SELECT o.Nombre FROM agentesxoperaciones ao INNER JOIN agentes a INNER JOIN novedades nov INNER JOIN operaciones o ON ao.Id_Agentes=a.Id AND ao.Id_Operaciones='".$row['id_Operaciones']."' AND nov.id_Operaciones='".$row['id_Operaciones']."' AND o.Id='".$row['id_Operaciones']."'";
    $result2 = mysqli_query($conexion, $sql2);
    $sql="SELECT a.Nombre FROM agentesxoperaciones ao INNER JOIN agentes a INNER JOIN novedades nov ON ao.Id_Agentes=a.Id AND ao.Id_Operaciones='".$row['id_Operaciones']."' AND nov.id_Operaciones='".$row['id_Operaciones']."' GROUP BY a.Nombre";
    $result1 = mysqli_query($conexion, $sql); 
    $row = mysqli_fetch_array($result2);
    echo  '<td>' .$row[0].'</td>';
    echo '<td>';
    $no1=1;
    while($row = mysqli_fetch_array($result1)) {
        echo  "Agente:".$no1.".(" .$row['Nombre'].") ";
        $no1++;
    }
    echo '</td>
    <tr>';
?>