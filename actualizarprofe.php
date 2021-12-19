<?php
require_once "bd/bd.php";
$prof= new bd();
$prof->mostrarLosSeleccionadosIdProf();

$unirapellidos=$prof["primerapellido"]." ".$prof["segundoapellido"];
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
        <h1>Actualizar datos de profesor</h1>
    <form action="proceso_registro_consulta/insertandoprofesor.php" method="post" class="row g-3">
      

  <div class="col-md-6">
  <input type="hidden" name="id" value="<?php echo $prof["id"];?>">
  <div class="shadow-none p-3 mb-5 bg-light rounded"><?php echo $prof["id"]; ?></div>
    
  
  <div class="col-md-6">
    <label class="form-label">Nombres Completos</label>
    <input type="text" name="nombres" class="form-control" id="inputNomCompletos" value="<?php echo $prof["primernombre"];echo" "; echo $prof["segundonombre"]; ?>">
  </div>
  <div class="col-md-6">
    <label class="form-label">Apellidos Completos</label>
    <input type="text" name="apellidos" class="form-control" id="inputApellidosCompletos" value="<?php echo $unirapellidos; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">DNI</label>
    <input type="text" name="dni" class="form-control" id="inputDni" placeholder=" DNI " value="<?php echo $prof["dni"]; ?>">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Celular</label>
    <input type="text" name="celular" class="form-control" id="inputCelular" placeholder="Celular" value="<?php echo $prof["celular"]; ?>">
  </div>

  <div class="col-12">
    <button type="submit" name="actualizarprof" class="btn btn-primary">Actualizar</button>
  </div>
</form>
    </div>
</body>
</html>