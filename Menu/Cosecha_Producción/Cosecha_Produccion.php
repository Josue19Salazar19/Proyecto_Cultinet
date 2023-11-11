<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosecha y Producción</title>
    <link rel="icon" type="../../Favicon.png" href="../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Cosecha y Producción</h1>  

<?php

include "controlador/eliminar_CP.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_CP.php";
  include "controlador/registro_CP.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Cantidad en kg</label>
    <input type="number" class="form-control" name="Cantidad_en_kg">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Fecha de cosecha</label>
    <input type="date" class="form-control" name="Fecha_de_cosecha">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Numero de racimos</label>
    <input type="number" class="form-control" name="Numero_de_racimos">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Tamaño promedio</label>
    <input type="text" class="form-control" name="Tamaño_promedio">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Estado de madurez</label>
    <input type="text" class="form-control" name="Estado_de_madurez">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- --> 
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Cantidad descartado</label>
    <input type="text" class="form-control" name="Cantidad_descartado">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Metodo de transporte</label>
    <input type="text" class="form-control" name="Metodo_de_transporte">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Condiciones climaticas</label>
    <input type="text" class="form-control" name="Condiciones_climaticas">

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
      <th scope="col">Cantidad en kg</th>
      <th scope="col">Fecha de cosecha</th>
      <th scope="col">Numero de racimos</th>
      <th scope="col">Tamaño promedio</th>
      <th scope="col">Estado de madurez</th>
      <th scope="col">Cantidad descartado</th>
      <th scope="col">Metodo de transporte</th>
      <th scope="col">Condiciones climaticas</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include "modelo/conexion_CP.php";
    $sql=$conexion_CP->query(" SELECT * FROM cosecha_y_produccion");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>

      <td><?= $datos->Cantidad_en_kg ?></td>
      <td><?= $datos->Fecha_de_cosecha ?></td>
      <td><?= $datos->Numero_de_racimos ?></td>
      <td><?= $datos->Tamaño_promedio ?></td>
      <td><?= $datos->Estado_de_madurez ?></td>
      <td><?= $datos->Cantidad_descartado ?></td>
      <td><?= $datos->Metodo_de_transporte ?></td>
      <td><?= $datos->Condiciones_climaticas ?></td>
      <td><?= $datos->Observaciones ?></td>

      <td>
      <a href="modificar_CP.php?id=<?= $datos->Cantidad_en_kg ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      <a href="Cosecha_Produccion.php?id=<?= $datos->Cantidad_en_kg ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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
    <a href="../Cosecha_Producción/Plagas_Enfermedades/Plagas_Enfermedades.php">Plagas y Enfermedades</a>

    <br>
    <br>

      <a href="../../Vista/Vista_principal.php">Atras</a>



  </body>
</html>