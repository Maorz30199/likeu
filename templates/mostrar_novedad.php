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
            ?>  
        </tbody>
    </table>
</body>
</html>