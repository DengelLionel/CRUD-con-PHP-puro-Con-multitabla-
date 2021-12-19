<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
</head>
<body>

    <div class="container">
        <h1>Registrar Estudiante</h1>
    <form action="proceso_registro_consulta/insertandoalumno.php" method="post" class="row g-3">
  <div class="col-md-6">
    <label class="form-label">Programa de Estudios</label>
    <input type="text" name="programaestudios" class="form-control" id="inputProgram">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Codigo Estudiante</label>
    <input type="password" name="codigoestudiante" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6">
    <label class="form-label">Nombres Completos</label>
    <input type="text" name="nombres" class="form-control" id="inputNomCompletos">
  </div>
  <div class="col-md-6">
    <label class="form-label">Apellidos Completos</label>
    <input type="text" name="apellidos" class="form-control" id="inputApellidosCompletos">
  </div>
  <div class="col-md-6">
    <label class="form-label">Género</label>
    <select name="genero" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected >Seleccione</option>
  <option value="masculino">Masculino</option>
  <option value="femenino">Femenino</option>
</select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Dirección</label>
    <input type="text" name="direccion" class="form-control" id="inputDireccion" placeholder="Jr. Dirección N° ">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Semestre</label>
    <input type="text" name="semestre" class="form-control" id="inputSemestre" placeholder="Semestre actual">
  </div>
  <div class="col-12">
    <button type="submit" name="registronuevoalumno" class="btn btn-primary">Sign in</button>
  </div>
</form>
    </div>
</body>
</html>