<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Tipo_de_emergencia"]) and !empty($_POST["Fecha_de_la_emergencia"]) and !empty($_POST["Cantidad_de_plantas_afectadas"]) and !empty($_POST["Descripcion_de_daños"]) and !empty($_POST["Medidas_tomadas"]) and !empty($_POST["Contacto_de_emergencia"]) ) {
        
        $Tipo_de_emergencia=$_POST["Tipo_de_emergencia"];
        $Fecha_de_la_emergencia=$_POST["Fecha_de_la_emergencia"];
        $Cantidad_de_plantas_afectadas=$_POST["Cantidad_de_plantas_afectadas"];
        $Descripcion_de_daños=$_POST["Descripcion_de_daños"];
        $Medidas_tomadas=$_POST["Medidas_tomadas"];
        $Contacto_de_emergencia=$_POST["Contacto_de_emergencia"];
      
        $sql=$conexion_EA->query(" INSERT INTO emergencias_ambientales(Tipo_de_emergencia,Fecha_de_la_emergencia,Cantidad_de_plantas_afectadas,Descripcion_de_daños,Medidas_tomadas,Contacto_de_emergencia)VALUE ('$Tipo_de_emergencia','$Fecha_de_la_emergencia','$Cantidad_de_plantas_afectadas','$Descripcion_de_daños','$Medidas_tomadas','$Contacto_de_emergencia')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Registrado con Exito</div>';
        } else {
            echo '<div class="alert alert-danger">Error al Registrar</div>';
            
        }
        

    }else{
        echo '<div class="alert alert-warning">Campos Vacios</div>';
        
    }

}

?>