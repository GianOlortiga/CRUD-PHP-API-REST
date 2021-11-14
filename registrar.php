<?php
header("Accesss-Control-Allow-Origin: *");
require_once 'conexion.php';

$id= $_POST['idt'];
$tarea = $_POST['tarea'];

if(empty($id)){
    $reg = "INSERT INTO tareas(tarea) VALUES ('".$tarea."')";

    $q = mysqli_query($mysqli,$reg);

    echo 'ok';

}else{
    $reg = "UPDATE tareas SET tarea ='".$tarea."' WHERE id='".$id."'";

    $q = mysqli_query($mysqli,$reg);

    echo 'Modificado';
}

?>