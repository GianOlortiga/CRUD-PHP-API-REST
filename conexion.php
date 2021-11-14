<?php

$mysqli= mysqli_connect('localhost','root','computoxl','crud_notas');

if(mysqli_connect_errno($mysqli)){
    echo 'Error al conectar con la db: '.mysqli_connect_error();
}
?>