<!Doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <?php include("librerias.php");?>
    <title>Novedades Likeu</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> 
    <div class="container">
      <a class="navbar-brand" href="./index.php"><b>Likeu</b></a>
      <a class="btn btn-outline-info d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="./templates/mostrar_novedad.php">Novedades</a>
    </div> 
  </nav>
  <?php include("templates/registro_novedad.php");?>
  
  <script src="js/condicion.js"></script>
</body>