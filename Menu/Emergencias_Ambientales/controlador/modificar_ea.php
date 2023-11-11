<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Tipo_de_emergencia"]) and !empty($_POST["Fecha_de_la_emergencia"]) and !empty($_POST["Cantidad_de_plantas_afectadas"]) and !empty($_POST["Descripcion_de_daños"]) and !empty($_POST["Medidas_tomadas"]) and !empty($_POST["Contacto_de_emergencia"]) ) {

        $id=$_POST["id"];
        $Tipo_de_emergencia=$_POST["Tipo_de_emergencia"];
        $Fecha_de_la_emergencia=$_POST["Fecha_de_la_emergencia"];
        $Cantidad_de_plantas_afectadas=$_POST["Cantidad_de_plantas_afectadas"];
        $Descripcion_de_daños=$_POST["Descripcion_de_daños"];
        $Medidas_tomadas=$_POST["Medidas_tomadas"];
        $Contacto_de_emergencia=$_POST["Contacto_de_emergencia"];

        $sql=$conexion_EA->query(" update emergencias_ambientales set Tipo_de_emergencia='$Tipo_de_emergencia', Fecha_de_la_emergencia='$Fecha_de_la_emergencia', Cantidad_de_plantas_afectadas='$Cantidad_de_plantas_afectadas', Descripcion_de_daños='$Descripcion_de_daños', Medidas_tomadas='$Medidas_tomadas', Contacto_de_emergencia='$Contacto_de_emergencia' WHERE Tipo_de_emergencia='$id' ");
        
        if ($sql==1) {
            header("location:Emergencias_Ambientales.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>