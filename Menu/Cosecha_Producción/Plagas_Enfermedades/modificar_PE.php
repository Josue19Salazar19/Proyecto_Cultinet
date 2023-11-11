<?php

include "modelo/conexion_PE.php";

$id = $_GET["id"];

$sql = $conexion_PE->query(" select * from plagas_y_enfermedades where identificador_de_la_siembra='$id' ");


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
include "controlador/modificar_PE.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Identificador de la siembra</label>
<input type="text" class="form-control" name="identificador_de_la_siembra" value="<?= $datos->identificador_de_la_siembra?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha</label>
<input type="date" class="form-control" name="Fecha" value="<?= $datos->Fecha?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Tipo de plaga o enfermedad</label>
<input type="text" class="form-control" name="Tipo_de_plaga_o_enfermedad" value="<?= $datos->Tipo_de_plaga_o_enfermedad?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Cantidad de plantas afectadas</label>
<input type="number" class="form-control" name="Cantidad_de_plantas_afectadas" value="<?= $datos->Cantidad_de_plantas_afectadas?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Grado de afectacion</label>
<input type="text" class="form-control" name="Grado_de_afectacion" value="<?= $datos->Grado_de_afectacion?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Tratamiento</label>
<input type="text" class="form-control" name="Tratamiento" value="<?= $datos->Tratamiento?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Resultados de los tratamientos</label>
<input type="text" class="form-control" name="Resultados_de_los_tratamientos" value="<?= $datos->Resultados_de_los_tratamientos?>">

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