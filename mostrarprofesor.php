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
        <h1>Mostrar datos de Profesor</h1>
        <table class="table">
  <thead class="table-dark">
    <tr>
        <th>Id</th>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Dni</th>
        <th>Celular</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
  <?php
           require_once "proceso_registro_consulta/mostrarRegistroProf.php"; //Traigo el array $dataProfe["profe"] del archivo que llamo.
   
        if(is_array($dataProfe['profe'])|| is_object($dataProfe['profe'])){ //Identifico si es un array o objeto para que no me muestre un error de ese indole.
        foreach($dataProfe['profe'] as $datosprofe){
            echo'<tr>';
            echo'<td>'.$datosprofe['id'].'</td>';
            echo'<td>'.$datosprofe['primernombre'].'</td>';
            echo'<td>'.$datosprofe['segundonombre'].'</td>';
            echo'<td>'.$datosprofe['primerapellido'].'</td>';
            echo'<td>'.$datosprofe['segundoapellido'].'</td>';
            echo'<td>'.$datosprofe['dni'].'</td>';
            echo'<td>'.$datosprofe['celular'].'</td>';
            echo"<td><a class='btn btn-success' href='actualizarprofe.php?b=actualizarprofe&id=".$datosprofe['id']."'>Actualizar</a> </td>"; //actualizarprofe esta dirigido a un metodo que tiene el mismo nombre
            echo"<td><a class='btn btn-danger' href='index.php?d=eliminarprofe&id=".$datosprofe['id']."'>Eliminar</a> </td>";
            echo'</tr>';
        } 
        require_once "proceso_registro_consulta/eliminandoProfe.php"; //Eliminamos segun el id
            if(isset($_GET["d"])){
                $delete->eliminarprofe($_GET["id"]);
            }
           
    }   
        
           
            

        
?> 
  </tbody>
  
</table>
    </div>
</body>
</html>