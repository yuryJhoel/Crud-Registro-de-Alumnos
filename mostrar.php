<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Resultados</title>
    <style>
        .cp {
            cursor:pointer;
        }
        .fa-trash {
            color:red;
        }
        .fa-pen{
            color:green;
        }
    </style>
</head>
<body>
    <h3 class="text-center">Lista de alumnos</h3><hr>

    <form action="agregarRegistro.php" method="POST">
        <input type="submit" value="Insertar datos" class="btn btn-primary">
    </form>

    <div class="table-responsive-xl container">
<table class="table">
    <thead class="thead-dark">
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Carrera</th>
        <th scope="col">Curso</th>
        <th scope="col">Nota1</th>
        <th scope="col">Nota2</th>
        <th scope="col">Nota3</th>
        <th scope="col">Promedio</th>
        <th colspan="2" scope="col">Opciones</th>     
    </thead>

    <?php
    include("conexion.php");
    $consulta = "SELECT * FROM alumnos";
    $resultado = mysqli_query ($mysqli, $consulta);
    $n = 0;
    function mipromedio($n1, $n2, $n3) {
        $nota = ($n1+$n2+$n3)/3;
        $promedio = round($nota, 1);
        if($promedio <= 10.5){
            return '<span class="text-danger">0'.$promedio.'</span>';
        }else{
            return '<span class="text-success">'.$promedio.'</span>';
        }
    }
    while( $row = mysqli_fetch_assoc($resultado) )
    {$n++;
        $id = $row['id'];
        echo "<tr>";
        echo "<td scope='row'>".$n."</td>";
        echo "<td>".$row['nombres']."</td>";
        echo "<td>".$row['apellidos']."</td>";
        echo "<td>".$row['carrera']."</td>";
        echo "<td>".$row['curso']."</td>";
        echo "<td>".$row['nota1']."</td>";
        echo "<td>".$row['nota2']."</td>";
        echo "<td>".$row['nota3']."</td>";
        echo "<td>".mipromedio($row['nota1'],$row['nota2'],$row['nota3'])."</td>";
        echo "<td><a href='editar.php?id=$id'>
        <i class='fas fa-pen' title='editar'></i></a></td>";
        echo "<td><a href='borrar.php?id=$id'><i class='fas fa-trash' title='eliminar'></i></a></td>";
        echo"</tr>";
    }
    echo "</table></div>";
    
    
    ?>
</body>
</html>