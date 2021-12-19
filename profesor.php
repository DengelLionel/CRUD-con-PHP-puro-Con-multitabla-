<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido nuevo profe</title>
</head>
<body>

    <div class="container">
        <h1>Registrar Profesor</h1>
    <form action="proceso_registro_consulta/insertandoprofesor.php" method="post" class="row g-3">
  
  <div class="col-md-6">
    <label class="form-label">Nombres Completos</label>
    <input type="text" name="nombres" class="form-control" id="inputNomCompletos">
  </div>
  <div class="col-md-6">
    <label class="form-label">Apellidos Completos</label>
    <input type="text" name="apellidos" class="form-control" id="inputApellidosCompletos">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">DNI</label>
    <input type="text" name="dni" class="form-control" id="inputDireccion" placeholder=" N° DNI 44444444 ">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Celular</label>
    <input type="text" name="celular" class="form-control" id="inputSemestre" placeholder=" 9599999">
  </div>
  <div class="col-12">
    <button type="submit" name="insertarprofe" class="btn btn-primary">Registrar</button>
  </div>
</form>
    </div>
</body>
</html>