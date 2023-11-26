<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8aad18d137.js" crossorigin="anonymous"></script>
    <title>Hoja de Calculo</title>

</head>

<body>
<script>
    function eliminar(){
        var respuesta=confirm("Estas seguro que deseas eliminar?")
        return respuesta
    }
</script>
<h1 class="text-center p-3">Hola Mundo en PHP :)</h1>
<?php
include "model/connection.php";
include "controller/action_delete.php";
?>

<div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secundary">Registro de Acciones</h3>
        <?php

        include "controller/action_register.php"
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOMBRE DE LA ACCIÓN</label>
            <input type="text" class="form-control" name="nombreAccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">FECHA DE COMPRA</label>
            <input type="date" class="form-control" name="fechaAccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRECIO DE COMPRA POR ACCION</label>
            <input type="text" class="form-control" name="precioAccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CANTIDADES DE ACCIONES</label>
            <input type="text" class="form-control" name="cantidadAccion">
        </div>
        <!--<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">COSTO TOTAL DE COMPRA</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>-->

        <button type="submit" class="btn btn-primary" name="btnRegistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
        <table class="table table-striped-columns">
            <thead class="bg-primary">
            <tr>
                <th scope="col">id Acción</th>
                <th scope="col">Nombre de la Acción</th>
                <th scope="col">Fecha de la Compra</th>
                <th scope="col">Precio de Compra por Acción</th>
                <th scope="col">Cantidades de Acciones</th>
                <th scope="col">Costo total de Compra</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            include "model/connection.php";
            $sql=$connection->query(" select * from acciones ");
            while($datos=$sql->fetch_object()){?>
                <tr>
                    <th scope="row"><?=$datos -> idAccion ?></th>
                    <td><?= $datos-> NombreAccion?></td>
                    <td><?= $datos-> FechaCompra?></td>
                    <td><?= $datos-> PrecioCompraAccion?></td>
                    <td><?= $datos-> CantidadAcciones?></td>
                    <td><?= $datos-> CostoTotalCompra?></td>
                    <td>
                        <a href="view/action_modifier.php?id=<?= $datos->idAccion ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a onclick="return eliminar()" href="index.php?id=<?= $datos->idAccion ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                    </td>
                </tr>

            <?php }
            ?>

            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
