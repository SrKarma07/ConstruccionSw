<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$connection-> query(" delete from acciones where idAccion=$id");
    if($sql==1){
        echo '<div class="alert alert-success">Accion eliminada correctamente</div>';
    }else{
        echo '<div class="alert alert-danger">Error al Eliminar</div>';
    }
}