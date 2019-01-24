<?php

 include('conexion.php');
$id = strtoupper($_GET['id']);
$nombre = strtoupper($_GET['nombre']);
$apellido = strtoupper($_GET['apellido']);
$carrera = strtoupper($_GET['carrera']);
$curso = strtoupper($_GET['curso']);
$nota1 = strtoupper($_GET['nota1']);
$nota2 = strtoupper($_GET['nota2']);
$nota3 = strtoupper($_GET['nota3']);
/*
    Modificacion de registros 
*/

$consulta = "UPDATE alumnos SET nombres='$nombre', apellidos='$apellido', carrera='$carrera', curso='$curso', nota1='$nota1', nota2='$nota2', nota3='$nota3' WHERE id='$id' ";

mysqli_query($mysqli, $consulta);
header('Location:mostrar.php'); //

?>