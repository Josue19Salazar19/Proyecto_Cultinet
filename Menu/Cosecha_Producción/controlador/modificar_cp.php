<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Cantidad_en_kg"]) and !empty($_POST["Fecha_de_cosecha"]) and !empty($_POST["Numero_de_racimos"]) and !empty($_POST["Tamaño_promedio"]) and !empty($_POST["Estado_de_madurez"]) and !empty($_POST["Cantidad_descartado"]) and !empty($_POST["Metodo_de_transporte"]) and !empty($_POST["Condiciones_climaticas"]) and !empty($_POST["Observaciones"]) ) {

        $id=$_POST["id"];
        $Cantidad_en_kg=$_POST["Cantidad_en_kg"];
        $Fecha_de_cosecha=$_POST["Fecha_de_cosecha"];
        $Numero_de_racimos=$_POST["Numero_de_racimos"];
        $Tamaño_promedio=$_POST["Tamaño_promedio"];
        $Estado_de_madurez=$_POST["Estado_de_madurez"];
        $Cantidad_descartado=$_POST["Cantidad_descartado"];
        $Metodo_de_transporte=$_POST["Metodo_de_transporte"];
        $Condiciones_climaticas=$_POST["Condiciones_climaticas"];
        $Observaciones=$_POST["Observaciones"];

        $sql=$conexion_CP->query(" update cosecha_y_produccion set Cantidad_en_kg='$Cantidad_en_kg', Fecha_de_cosecha='$Fecha_de_cosecha', Numero_de_racimos='$Numero_de_racimos', Tamaño_promedio='$Tamaño_promedio', Estado_de_madurez='$Estado_de_madurez', Cantidad_descartado='$Cantidad_descartado', Metodo_de_transporte='$Metodo_de_transporte', Condiciones_climaticas='$Condiciones_climaticas', Observaciones='$Observaciones' WHERE Cantidad_en_kg='$id' ");
        
        if ($sql==1) {
            header("location:Cosecha_Produccion.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>