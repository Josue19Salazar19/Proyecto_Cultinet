<?php

include "modelo/conexion_CP.php";

$id = $_GET["id"];

$sql = $conexion_CP->query(" select * from cosecha_y_produccion where Cantidad_en_kg='$id' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="../../Favicon.png" href="../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
    
<form class="col-4 p-3 m-auto" method="POST">

<h1 class="text-center alert alert-secondary">Modificar</h1>

<input type="hidden" name="id" value="<?= $_GET["id"] ?>">

<?php 
include "controlador/modificar_CP.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Cantidad en kg</label>
<input type="number" class="form-control" name="Cantidad_en_kg" value="<?= $datos->Cantidad_en_kg?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha de cosecha</label>
<input type="date" class="form-control" name="Fecha_de_cosecha" value="<?= $datos->Fecha_de_cosecha?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Numero de racimos</label>
<input type="number" class="form-control" name="Numero_de_racimos" value="<?= $datos->Numero_de_racimos?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Tamaño promedio</label>
<input type="text" class="form-control" name="Tamaño_promedio" value="<?= $datos->Tamaño_promedio?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Estado de madurez</label>
<input type="text" class="form-control" name="Estado_de_madurez" value="<?= $datos->Estado_de_madurez?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Cantidad descartado</label>
<input type="text" class="form-control" name="Cantidad_descartado" value="<?= $datos->Cantidad_descartado?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Metodo de transporte</label>
<input type="text" class="form-control" name="Metodo_de_transporte" value="<?= $datos->Metodo_de_transporte?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Condiciones climaticas</label>
<input type="text" class="form-control" name="Condiciones_climaticas" value="<?= $datos->Condiciones_climaticas?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Observaciones</label>
<input type="text" class="form-control" name="Observaciones" value="<?= $datos->Observaciones?>">

</div>

<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>