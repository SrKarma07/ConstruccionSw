<?php
if (!empty($_POST["btnRegistrar"])){
    if (!empty($_POST["nombreAccion"]) and !empty($_POST["fechaAccion"]) and !empty($_POST["precioAccion"]) and !empty($_POST["cantidadAccion"])){
        $id=$_POST["id"];
        $nombre=$_POST["nombreAccion"];
        $fecha=$_POST["fechaAccion"];
        $precio=$_POST["precioAccion"];
        $cantidad=$_POST["cantidadAccion"];

        $sql=$connection -> query("update acciones set NombreAccion='$nombre', FechaCompra='$fecha', PrecioCompraAccion=$precio, CantidadAcciones=$cantidad where idAccion=$id");
        if ($sql==1){
            header("location:../index.php");
        }else{
            echo "<div class='alert alert-danger'>Error al modificar accion</div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Campos Vacios</div>";
    }
}