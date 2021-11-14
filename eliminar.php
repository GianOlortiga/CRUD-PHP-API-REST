<?php
header("Accesss-Control-Allow-Origin: *");
$data = file_get_contents("php://input");

require_once('conexion.php');

$editar = "DELETE FROM tareas WHERE id = '".$data."'";

$q = mysqli_query($mysqli,$editar);

mysqli_close($mysqli);

echo "ok";

?>