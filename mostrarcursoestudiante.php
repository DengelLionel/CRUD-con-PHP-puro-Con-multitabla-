<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar </title>
</head>
<body>
    <div class="container">
        <h1>Mostrar datos de Curso de Estudiante</h1>

        <table class="table">
  <thead class="table-dark">
    <tr>
        <th>Id</th>
        <th>Primer Nombre</th>
        <th>Primer Curso</th>
        <th>Segundo Curso</th>
        <th>Tercer Curso</th>
        <th>Cuarto Curso</th>
    </tr>
  </thead>
  <tbody>
  <?php
           require_once "proceso_registro_consulta/mostrarRegistroAlum.php";
   
        if(is_array($data['cursoestudiante'])|| is_object($data['cursoestudiante'])){ 
        foreach($data['cursoestudiante'] as $datotodo){
            echo'<tr>';
            echo'<td>'.$datotodo['id'].'</td>';
            echo'<td>'.$datotodo['primernombre'].'</td>';
            echo'<td>'.$datotodo['cursouno'].'</td>';
            echo'<td>'.$datotodo['cursodos'].'</td>';
            echo'<td>'.$datotodo['cursotres'].'</td>';
            echo'<td>'.$datotodo['cursocuatro'].'</td>';
            echo'</tr>';
        } 
    }   
       
        require_once "bd/bd.php";
         
           
            

        
?> 
  </tbody>
  
</table>
    </div>
   
</body>
</html>