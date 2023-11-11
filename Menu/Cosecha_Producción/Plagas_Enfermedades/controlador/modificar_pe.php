<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["identificador_de_la_siembra"]) and !empty($_POST["Fecha"]) and !empty($_POST["Tipo_de_plaga_o_enfermedad"]) and !empty($_POST["Cantidad_de_plantas_afectadas"]) and !empty($_POST["Grado_de_afectacion"]) and !empty($_POST["Tratamiento"]) and !empty($_POST["Resultados_de_los_tratamientos"]) and !empty($_POST["Observaciones"]) ) { 

        $id=$_POST["id"];
        $identificador_de_la_siembra=$_POST["identificador_de_la_siembra"]; 
        $Fecha=$_POST["Fecha"]; 
        $Tipo_de_plaga_o_enfermedad=$_POST["Tipo_de_plaga_o_enfermedad"]; 
        $Cantidad_de_plantas_afectadas=$_POST["Cantidad_de_plantas_afectadas"]; 
        $Grado_de_afectacion=$_POST["Grado_de_afectacion"]; 
        $Tratamiento=$_POST["Tratamiento"]; 
        $Resultados_de_los_tratamientos=$_POST["Resultados_de_los_tratamientos"];  
        $Observaciones=$_POST["Observaciones"]; 
        
        $sql=$conexion_PE->query(" update plagas_y_enfermedades set identificador_de_la_siembra='$identificador_de_la_siembra', Fecha='$Fecha', Tipo_de_plaga_o_enfermedad='$Tipo_de_plaga_o_enfermedad', Cantidad_de_plantas_afectadas='$Cantidad_de_plantas_afectadas', Grado_de_afectacion='$Grado_de_afectacion', Tratamiento='$Tratamiento', Resultados_de_los_tratamientos='$Resultados_de_los_tratamientos', Observaciones='$Observaciones' WHERE identificador_de_la_siembra='$id' ");
        
        if ($sql==1) {
            header("location:Plagas_Enfermedades.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>