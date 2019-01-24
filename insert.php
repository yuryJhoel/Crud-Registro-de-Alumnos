    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulario</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
<?php

 include('conexion.php');
$nombre = strtoupper($_GET['nombre']);
$apellido = strtoupper($_GET['apellido']);
$carrera = strtoupper($_GET['carrera']);
$curso = strtoupper($_GET['curso']);
$nota1 = strtoupper($_GET['nota1']);
$nota2 = strtoupper($_GET['nota2']);
$nota3 = strtoupper($_GET['nota3']);

/*
     Insercion a la base de datos 
*/
$consulta = "INSERT INTO alumnos(nombres, apellidos, carrera, curso, nota1, nota2, nota3) VALUES ('$nombre','$apellido', '$carrera','$curso', '$nota1', '$nota2', '$nota3')" or die (mysqli_error($mysqli));

mysqli_query($mysqli, $consulta);
header('Location: mostrar.php');
?>
