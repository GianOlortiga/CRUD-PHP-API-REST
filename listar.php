<?php
header("Accesss-Control-Allow-Origin: *");
require_once 'conexion.php';

$listar = "SELECT * FROM tareas";

$q = mysqli_query($mysqli,$listar);

$n = mysqli_num_rows($q);

if($n > 0){
    while($data=mysqli_fetch_array($q)){
        echo "<div class='alert alert-primary'>
                " . $data['tarea'] . "
                <button type='button' class='btn btn-danger float-end' onclick=Eliminar('" . $data['id'] . "')><i class='bi bi-trash'></i></button>
                <button type='button' class='btn btn-primary float-end  me-md-1' onclick=Editar('" . $data['id'] . "')><i class='bi bi-pencil'></i></button>

            </div>";
    }
}else{
    echo "<h4 class='mt-4'>No hay Tareas</h4>";
}

mysqli_close($mysqli);
?>