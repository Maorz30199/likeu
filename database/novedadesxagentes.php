<?php
    mysqli_select_db($conexion,"novedades");
                            $sql="SELECT a.Nombre FROM novedades nov INNER JOIN agentes a ON a.Id='".$row['id_Agentes']."'";
                            $result1 = mysqli_query($conexion, $sql);
                            $row = mysqli_fetch_array($result1);
                            echo  '<td> No asignada </td>
                            <td> Agente: '.$row[0].'</td>';
?>