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
    <style>
        body {
            margin: 0;
            height: 100%;
            color: #fff;
        }
    </style>
</head>
<body class="d-flex flex-column" style="min-height: 100vh;">

<form class="col-4 p-3 m-auto text-center" method="POST">
    <h1 class="text-center text-secundary text-primary"><b>Modificar Acciones</b></h1>
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <?php
    include "../controller/modify_action.php";
    while($datos = $sql->fetch_object()) { ?>
        <div class="mb-3 text-dark">
            <label for="exampleInputEmail1" class="form-label">NOMBRE DE LA ACCIÓN</label>
            <input type="text" class="form-control" name="nombreAccion" id="nombreAccion" value="<?= $datos->NombreAccion?>" maxlength="3">
        </div>
        <div class="mb-3 text-dark">
            <label for="exampleInputEmail1" class="form-label">FECHA DE COMPRA</label>
            <input type="date" class="form-control" name="fechaAccion" value="<?= $datos->FechaCompra?>">
        </div>
        <div class="mb-3 text-dark">
            <label for="exampleInputEmail1" class="form-label">PRECIO DE COMPRA POR ACCIÓN</label>
            <input type="text" class="form-control" name="precioAccion" pattern="[0-9]*" title="Ingresa solo números" value="<?= $datos->PrecioCompraAccion?>">
        </div>
        <div class="mb-3 text-dark">
            <label for="exampleInputEmail1" class="form-label">CANTIDADES DE ACCIONES</label>
            <input type="text" class="form-control" name="cantidadAccion" pattern="[0-9]*" title="Ingresa solo números" value="<?= $datos->CantidadAcciones?>">
        </div>
    <?php }
    ?>
    <div class="text-center">
    <button type="submit" class="btn mx-auto text-light btn-lg bg-primary" name="btnRegistrar" value="ok" style="color: #0d6efd;">Aceptar</button>
    </div>

</form>
<footer class="bg-primary text-white py-4 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h5>Averos David, Camapaña Gary, Torres David</h5>
                    <h5>&copy; 2023 Todos los derechos reservados</h5>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var inputNombreAccion = document.getElementById("nombreAccion");

    inputNombreAccion.addEventListener("input", function() {
        // Remover caracteres no permitidos (letras minúsculas y otros caracteres)
        var inputValue = this.value.replace(/[^A-Z]/g, '');
        
        // Convertir el valor a mayúsculas
        this.value = inputValue.toUpperCase();
    });
});
</script>
