<?php

if(!empty($_POST["btnRegistrar"])){
    if(!empty($_POST["nombreAccion"])and !empty($_POST["fechaAccion"])and !empty($_POST["precioAccion"])and !empty($_POST["cantidadAccion"])){

        $nombre=$_POST["nombreAccion"];
        $fecha=$_POST["fechaAccion"];
        $precio=$_POST["precioAccion"];
        $cantidad=$_POST["cantidadAccion"];

        $sql = $connection -> query(" insert into acciones(NombreAccion, FechaCompra, PrecioCompraAccion, CantidadAcciones)values('$nombre','$fecha','$precio','$cantidad')");
        if ($sql==1){
            echo  '<div class="alert alert-success">Accion Registrada Correctamente</div>';
        }else{
            echo  '<div class="alert alert-danger">Error al registrar accion</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }

}