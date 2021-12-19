<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/mostrardata.js"></script>
  <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar data</title>
    l
</head>
<body>
    <div class="container">
    <h1>Mostrar Datos</h1>
    
    <input id="mostrarEstudiantee" class="btn btn-primary" type="button" value="Mostrar Estudiantes">
    <input id="mostrarProfesores" class="btn btn-primary" type="button" value="Mostrar Profesores">
    <input  id="mostrarCursoEstudiantee"class="btn btn-primary" type="button" value="Mostrar Curso Estudiante">

    <div class="mostrarestudiante">
      <?php
      require_once "mostrarestudiante.php";
      
      ?>
    </div>
    <div class="mostrarprofesor">
      <?php
      require_once "mostrarprofesor.php";
      ?>
    </div>
    <div class="mostrarcursoestudiante">
      <?php
      require_once "mostrarcursoestudiante.php";
      ?>
    </div>

    
</body>
    
</html>