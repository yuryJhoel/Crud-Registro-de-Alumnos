<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <form action="insert.php" method="GET">

            <div class="form-group row">                
                <label class="col-1 col-form-label">Nombre</label>
                <div class="col-9">
                  <input class="form-control" type="text" placeholder="nombre" name="nombre">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-1 col-form-label">Apellido</label>
                <div class="col-9">
                  <input class="form-control" type="text" placeholder="apellido" name="apellido">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-1 col-form-label">Carrera</label>
                <div class="col-9">
                  <input class="form-control" type="text" placeholder="carrera" name="carrera">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-1 col-form-label">Curso</label>
                <div class="col-9">
                  <input class="form-control" type="text" placeholder="curso" name="curso">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-1 col-form-label">Nota1</label>
                <div class="col-9">
                  <input class="form-control" type="number" placeholder="nota1" name="nota1">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-1 col-form-label">Nota2</label>
                <div class="col-9">
                  <input class="form-control" type="number" placeholder="nota2" name="nota2">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-1 col-form-label">Nota3</label>
                <div class="col-9">
                  <input class="form-control" type="number" placeholder="nota3" name="nota3">
                </div>
              </div>                
              <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>

</body>
</html>