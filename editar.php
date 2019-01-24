<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
<div class="row">
<?php
    include("conexion.php");
    $id = $_GET['id'];
    $consulta = "SELECT * FROM alumnos WHERE id= '$id'";
    $resultado = mysqli_query ($mysqli, $consulta);
    $row = mysqli_fetch_array($resultado);

    $nombre = $row["nombres"];
    $apellido = $row["apellidos"];
    $carrera = $row["carrera"];
    $curso = $row["curso"];
    $nota1 = $row["nota1"];
    $nota2 = $row["nota2"];
    $nota3 = $row["nota3"];

?>
    <table class="table">
        <form action="guardarcambios.php" method="GET">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <thead class="thead-dark">

            <tr><td>Nombre</td>
            <td><input type="text" name="nombre" value="<?php echo $nombre; ?>"></td></tr>
            <tr><td>Apellidos</td>
            <td><input type="text" name="apellido" value="<?php echo $apellido; ?>"></td></tr>
            <tr><td>Carrera</td>
            <td><input type="text" name="carrera" value="<?php echo $carrera; ?>"></td></tr>
            <tr><td>Curso</td>
            <td><input type="text" name="curso" value="<?php echo $curso; ?>"></td></tr>
            <tr><td>Nota1</td>
            <td><input type="text" name="nota1" value="<?php echo $nota1; ?>"></td></tr>
            <tr><td>Nota2</td>
            <td><input type="text" name="nota2" value="<?php echo $nota2; ?>"></td></tr>
            <tr><td>Nota3</td>
            <td><input type="text" name="nota3" value="<?php echo $nota3; ?>"></td></tr>
            <tr><td colspan="2"><input type="submit" name="guardar" value="update" class="btn btn-info btn-block"></td>
            
        </thead>
        </form><!-- cierra formulario   -->
    </table>
</div>
</div>
    
</body>
</html>