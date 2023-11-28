<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergencias Ambientales</title>
    <link rel="icon" type="../../Favicon.png" href="../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Emergencias_Ambientales.css">
</head>
<body>

  <!-- ----------------------------------------------------------------------------------------------------------- -->

    <header class="header">
        <div class="partOne">
            <img src="../logo.png" alt="" class="logoImage" href="">
        </div>
        <nav class="menu">
            
        <a href="../../Vista/Vista_principal.php">Atras</a>
            
        </nav>
    </header>

  <!-- ----------------------------------------------------------------------------------------------------------- -->

    
<h1 class="text-center p-2">Emergencias Ambientales</h1>  

<?php

include "controlador/eliminar_EA.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_EA.php";
  include "controlador/registro_EA.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Tipo de emergencia</label>
    <input type="text" class="form-control" name="Tipo_de_emergencia">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Fecha de la emergencia</label>
    <input type="date" class="form-control" name="Fecha_de_la_emergencia">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Cantidad de plantas afectadas</label>
    <input type="number" class="form-control" name="Cantidad_de_plantas_afectadas">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Descripcion de daños</label>
    <input type="text" class="form-control" name="Descripcion_de_daños">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
   <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Medidas tomadas</label>
    <input type="text" class="form-control" name="Medidas_tomadas">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
    <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Contacto de emergencia</label>
    <input type="number" class="form-control" name="Contacto_de_emergencia">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
   
  
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Tipo de emergencia</th>
      <th scope="col">Fecha de la emergencia</th>
      <th scope="col">Cantidad de plantas afectadas</th>
      <th scope="col">Descripcion de daños</th>
      <th scope="col">Medidas tomadas</th>
      <th scope="col">Contacto de emergencia</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_EA.php";
    $sql=$conexion_EA->query(" SELECT * FROM emergencias_ambientales");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>

      <td><?= $datos->Tipo_de_emergencia ?></td>
      <td><?= $datos->Fecha_de_la_emergencia ?></td>
      <td><?= $datos->Cantidad_de_plantas_afectadas ?></td>
      <td><?= $datos->Descripcion_de_daños ?></td>
      <td><?= $datos->Medidas_tomadas ?></td>
      <td><?= $datos->Contacto_de_emergencia ?></td>

      <td>
      <a href="modificar_EA.php?id=<?= $datos->Tipo_de_emergencia ?>" class="btn btn-small"><i class="fa-solid fa-pen-to-square"></i></a>
      </td>

    </tr>

    <?php }
    ?>

  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>