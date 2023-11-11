<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plagas y Enfermedades</title>
    <link rel="icon" type="../../../Favicon.png" href="../../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Plagas y Enfermedades</h1>  

<?php

include "controlador/eliminar_PE.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_PE.php";
  include "controlador/registro_PE.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Identificador de la siembra</label>
    <input type="text" class="form-control" name="identificador_de_la_siembra">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="Fecha">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Tipo de plaga o enfermedad</label>
    <input type="text" class="form-control" name="Tipo_de_plaga_o_enfermedad">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Cantidad de plantas afectadas</label>
    <input type="number" class="form-control" name="Cantidad_de_plantas_afectadas">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Grado de afectacion</label>
    <input type="text" class="form-control" name="Grado_de_afectacion">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- --> 
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Tratamiento</label>
    <input type="text" class="form-control" name="Tratamiento">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Resultados de los tratamientos</label>
    <input type="text" class="form-control" name="Resultados_de_los_tratamientos">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Observaciones</label>
    <input type="text" class="form-control" name="Observaciones">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador de la siembra</th>
      <th scope="col">Fecha</th>
      <th scope="col">Tipo de plaga o enfermedad</th>
      <th scope="col">Cantidad de plantas afectadas</th>
      <th scope="col">Grado de afectacion</th>
      <th scope="col">Tratamiento</th>
      <th scope="col">Resultados de los tratamientos</th>
      <th scope="col">Observaciones</th>
    
    </tr>
  </thead>
  <tbody>

  <?php
    include "modelo/conexion_PE.php";
    $sql=$conexion_PE->query(" SELECT * FROM plagas_y_enfermedades");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>

      <td><?= $datos->identificador_de_la_siembra ?></td>
      <td><?= $datos->Fecha ?></td>
      <td><?= $datos->Tipo_de_plaga_o_enfermedad ?></td>
      <td><?= $datos->Cantidad_de_plantas_afectadas ?></td>
      <td><?= $datos->Grado_de_afectacion ?></td>
      <td><?= $datos->Tratamiento ?></td>
      <td><?= $datos->Resultados_de_los_tratamientos ?></td>
      <td><?= $datos->Observaciones ?></td>

      <td>
      <a href="modificar_PE.php?id=<?= $datos->identificador_de_la_siembra?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      <a href="Plagas_Enfermedades.php?id=<?= $datos->identificador_de_la_siembra?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>

    </tr>

    <?php }
    ?>

  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <br>
    <br>

      <a href="../../../Vista/Vista_principal.php">Atras</a>



  </body>
</html>