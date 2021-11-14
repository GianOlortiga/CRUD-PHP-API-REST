<?php
header("Accesss-Control-Allow-Origin: *");
$data = file_get_contents("php://input");

require_once('conexion.php');

$editar = "SELECT * FROM tareas WHERE id = '".$data."'";

$q = mysqli_query($mysqli,$editar);

$res = mysqli_fetch_array($q);

echo json_encode($res);

mysqli_close($mysqli);
?>