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
    <style>
        body {
            margin: 0;
            height: 100%;
            color: #fff;
        }
    </style>
</head>
<body class="d-flex flex-column " style="min-height: 100vh;">
<script>
    function eliminar(){
        var respuesta=confirm("Estas seguro que deseas eliminar?")
        return respuesta
    }
</script>
<h1 class="text-center p-3 text-dark">Hoja de Calculo</h1>
<?php
include "model/connection.php";
include "controller/action_delete.php";
?>

<div class="container-fluid column">
    <form class="col-4 p-3 text-center mx-auto" method="POST" >
        <h2 class="text-center text-primary">Registro de Acciones</h2>
        <?php
        include "controller/action_register.php"
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">NOMBRE DE LA ACCIÓN</label>
            <input type="text" class="form-control" name="nombreAccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">FECHA DE COMPRA</label>
            <input type="date" class="form-control" name="fechaAccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">PRECIO DE COMPRA POR ACCION</label>
            <input type="text" class="form-control" name="precioAccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-dark">CANTIDADES DE ACCIONES</label>
            <input type="text" class="form-control" name="cantidadAccion">
        </div>
        <button type="submit" class="btn btn-info btn-primary mx-auto" name="btnRegistrar" value="ok">Registrar</button>
    </form>
    <div class="col-10 p-3 mx-auto">
        <h2 class="text-center text-secundary">Tabla de Acciones</h2>
        <table class="table  table-dark table-hover table-striped-columns">
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
<footer class="bg-secondary text-white py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p>Averos David, Camapaña Gary, Torres David</p>
                    <p>&copy; 2023 Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
