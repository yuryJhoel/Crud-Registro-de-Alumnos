<?php
    include("conexion.php");
    $id = $_GET['id'];

    $consulta = "DELETE FROM alumnos where id='$id'";
    $ok = mysqli_query($mysqli, $consulta) or die (mysql_error($mysql));  
    
    header('Location:mostrar.php'); //
?>
    