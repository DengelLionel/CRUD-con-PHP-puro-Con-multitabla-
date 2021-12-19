<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a Aprende cursos gratis</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cursos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item" id="agregar">
          <a class="nav-link" href="#" >Agregar Estudiante</a>
        </li>
        <li class="nav-item" id="agregarprofe">
          <a class="nav-link" href="#" >Agregar Profesor</a>
        </li>
        <li class="nav-item" id="mostrardata">
          <a class="nav-link" href="#">Mostrar Datos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loginEstudiante.php">Iniciar Sesión como Estudiante</a>
        </li>
      </ul>
      <span class="navbar-text">
        Hecho por Dengel Rivera
      </span>
      
    </div>
  </div>
</nav>
    <div class="agregando" >
        <?php
        require_once "alumno.php";
        ?>
    </div>
    <div class="agregandoProfe" >
        <?php
        require_once "profesor.php";
        ?>
    </div>
    <div class="mostrardatos">
      <?php
      require_once "mostrardatos.php";
      ?>
   
    </div>
</body>
<script src="js/agregar.js"></script>
</html>