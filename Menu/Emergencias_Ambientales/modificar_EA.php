<?php

include "modelo/conexion_EA.php";

$id = $_GET["id"];

$sql = $conexion_EA->query(" select * from emergencias_ambientales where Tipo_de_emergencia='$id' ");


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
include "controlador/modificar_EA.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Tipo de emergencia</label>
<input type="text" class="form-control" name="Tipo_de_emergencia" value="<?= $datos->Tipo_de_emergencia?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha de la emergencia</label>
<input type="text" class="form-control" name="Fecha_de_la_emergencia" value="<?= $datos->Fecha_de_la_emergencia?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Cantidad de plantas afectadas</label>
<input type="date" class="form-control" name="Cantidad_de_plantas_afectadas" value="<?= $datos->Cantidad_de_plantas_afectadas?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Descripcion de daños</label>
<input type="text" class="form-control" name="Descripcion_de_daños" value="<?= $datos->Descripcion_de_daños?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Medidas tomadas</label>
<input type="text" class="form-control" name="Medidas_tomadas" value="<?= $datos->Medidas_tomadas?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Contacto de emergencia</label>
<input type="number" class="form-control" name="Contacto_de_emergencia" value="<?= $datos->Contacto_de_emergencia?>">

</div>
<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>