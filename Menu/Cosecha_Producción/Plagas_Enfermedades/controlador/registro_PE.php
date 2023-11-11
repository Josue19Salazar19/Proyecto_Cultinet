<?php  
  
if (!empty($_POST["btnregistrar"])) { 
    if (!empty($_POST["Identificador_de_siembra"]) and !empty($_POST["Fecha"]) and !empty($_POST["Tipo_de_plaga_o_enfermedad"]) and !empty($_POST["Cantidad_de_plantas_afectadas"]) and !empty($_POST["Grado_de_afectacion"]) and !empty($_POST["Tratamiento"]) and !empty($_POST["Resultados_de_los_tratamientos"]) and !empty($_POST["Observaciones"]) ) { 
         
        $Identificador_de_siembra=$_POST["Identificador_de_siembra"]; 
        $Fecha=$_POST["Fecha"]; 
        $Tipo_de_plaga_o_enfermedad=$_POST["Tipo_de_plaga_o_enfermedad"]; 
        $Cantidad_de_plantas_afectadas=$_POST["Cantidad_de_plantas_afectadas"]; 
        $Grado_de_afectacion=$_POST["Grado_de_afectacion"]; 
        $Tratamiento=$_POST["Tratamiento"]; 
        $Resultados_de_los_tratamientos=$_POST["Resultados_de_los_tratamientos"];  
        $Observaciones=$_POST["Observaciones"]; 
       
        $sql=$conexion_PE->query(" INSERT INTO plagas_y_enfermedades(Identificador_de_siembra,Fecha,Tipo_de_plaga_o_enfermedad,Cantidad_de_plantas_afectadas,Grado_de_afectacion,Tratamiento,Resultados_de_los_tratamientos,Observaciones) VALUES ('$Identificador_de_siembra','$Fecha','$Tipo_de_plaga_o_enfermedad','$Cantidad_de_plantas_afectadas','$Grado_de_afectacion','$Tratamiento','$Resultados_de_los_tratamientos','$Observaciones')"); 
         
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
