<?php
include "../model/connection.php";
$id = $_GET["id"];

$sql = $connection->query(" select * from acciones where idAccion=$id");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<form class="col-4 p-3 m-auto" method="POST">
    <h3 class="text-center text-secundary">Modificar Acciones</h3>
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <?php
    include "../controller/modify_action.php";
    while($datos = $sql->fetch_object()) { ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOMBRE DE LA ACCIÓN</label>
            <input type="text" class="form-control" name="nombreAccion" value="<?= $datos->NombreAccion?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">FECHA DE COMPRA</label>
            <input type="date" class="form-control" name="fechaAccion" value="<?= $datos->FechaCompra?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRECIO DE COMPRA POR ACCION</label>
            <input type="text" class="form-control" name="precioAccion" value="<?= $datos->PrecioCompraAccion?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CANTIDADES DE ACCIONES</label>
            <input type="text" class="form-control" name="cantidadAccion" value="<?= $datos->CantidadAcciones?>">
        </div>
        <!--<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">COSTO TOTAL DE COMPRA</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>-->
    <?php }
    ?>
    <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Modificar Accion</button>
</form>

</body>
</html>
