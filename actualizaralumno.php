<?php
require_once "bd/bd.php";
$estudiante= new bd();
$estudiante->mostrarLosSeleccionadosId();

$unirapellidos=$s["primerapellido"]." ".$s["segundoapellido"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
</head>
<body>
    
    
    <div class="container">
        <h1>Sign In</h1>
    <form action="proceso_registro_consulta/insertandoalumno.php" method="post" class="row g-3">
      

  <div class="col-md-6">
  <input type="hidden" name="id" value="<?php echo $s["id"];?>">
  <div class="shadow-none p-3 mb-5 bg-light rounded"><?php echo $s["id"]; ?></div>
    <label class="form-label">Programa de Estudios</label>
    <input type="text" name="programaestudios" class="form-control" id="inputProgram" value="<?php echo $s["programaestudios"]; ?>">
  </div>
  <div class="col-md-6">
  
    <label for="inputPassword4" class="form-label">Codigo Estudiante</label>
    <input type="text" name="codigoestudiante" class="form-control" id="inputPassword4" value="<?php echo $s["codigoestudiante"]; ?>" >
    
  </div>
  
  <div class="col-md-6">
    <label class="form-label">Nombres Completos</label>
    <input type="text" name="nombres" class="form-control" id="inputNomCompletos" value="<?php echo $s["primernombre"];echo" "; echo $s["segundonombre"]; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Apellidos Completos</label>
    <input type="text" name="apellidos" class="form-control" id="inputApellidosCompletos" value="<?php echo $unirapellidos; ?>">
  </div>

  <div class="col-md-6">
    <label class="form-label">Género</label>
    <div class="shadow-none p-3 mb-5 bg-light rounded"><?php echo $s["genero"]; ?></div>
    <select name="genero" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
    value="">
  <option selected >Seleccione</option>
  <option value="masculino">Masculino</option>
  <option value="femenino">Femenino</option>
</select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Dirección</label>
    <input type="text" name="direccion" class="form-control" id="inputDireccion" placeholder="Jr. Dirección N° " value="<?php echo $s["direccion"]; ?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Semestre</label>
    <input type="text" name="semestre" class="form-control" id="inputSemestre" placeholder="Semestre actual" value="<?php echo $s["semestre"]; ?>">
  </div>

  <div class="col-12">
    <button type="submit" name="actualizar" class="btn btn-primary">Sign in</button>
  </div>
</form>
    </div>
</body>
</html>