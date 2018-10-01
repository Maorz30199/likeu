<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Novedades Likeu</title>
    <?php include("../librerias.php")?>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container">
            <a class="navbar-brand" href="../index.php"><b>Likeu</b></a>
            <a class="btn btn-outline-info d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="../index.php">Inicio</a>
        </div>
    </nav>
    <h1>Lista de novedades</h1>
    <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Código</th>
            <th scope="col">Categoría</th>
            <th scope="col">Duración H:M:S</th>
            <th scope="col">Descripción</th>
            <th scope="col">Operación</th>
            <th scope="col">Agentes relacionados</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("../database/novedades.php");
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
                            mysqli_select_db($conexion,"novedades");
                            $sql="SELECT a.Nombre FROM novedades nov INNER JOIN agentes a ON a.Id='".$row['id_Agentes']."'";
                            $result1 = mysqli_query($conexion, $sql);
                            $row = mysqli_fetch_array($result1);
                            echo  '<td> No asignada </td>
                            <td> Agente: '.$row[0].'</td>';
                        }else{
                            mysqli_select_db($conexion,"agentesxoperaciones");
                            $sql2="SELECT o.Nombre FROM agentesxoperaciones ao INNER JOIN agentes a INNER JOIN novedades nov INNER JOIN operaciones o ON ao.Id_Agentes=a.Id AND ao.Id_Operaciones='".$row['id_Operaciones']."' AND nov.id_Operaciones='".$row['id_Operaciones']."' AND o.Id='".$row['id_Operaciones']."'";
                            $result2 = mysqli_query($conexion, $sql2);
                            $sql="SELECT a.Nombre FROM agentesxoperaciones ao INNER JOIN agentes a INNER JOIN novedades nov ON ao.Id_Agentes=a.Id AND ao.Id_Operaciones='".$row['id_Operaciones']."' AND nov.id_Operaciones='".$row['id_Operaciones']."'";
                            $result1 = mysqli_query($conexion, $sql); 
                            $row = mysqli_fetch_array($result2);
                            echo  '<td>' .$row[0].'</td>';
                            echo '<td>';
                            $no=1;
                            while($row = mysqli_fetch_array($result1)) {
                                echo  "Agente:".$no.".(" .$row['Nombre'].") ";
                                $no++;
                            }
                            echo '</td>
                            <tr>';
                            }$no++;
                        }mysqli_close($conexion);
                }else{
                    echo "No se logró establecer la conexíón: " . mysqli_error($conexion)."<br>";
                }
            ?>  
        </tbody>
    </table>
</body>
</html>