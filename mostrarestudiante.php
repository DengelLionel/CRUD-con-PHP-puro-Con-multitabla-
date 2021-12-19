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
        <h1>Mostrar datos de Estudiantes</h1>
        <table class="table">
  <thead class="table-dark">
    <tr>
        <th>Id</th>
        <th>Programa de Estudios</th>
        <th>Código Estudiante </th>
        <th>Primer Nombre</th>
        <th>Segundo Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Genero</th>
        <th>Dirección</th>
        <th>Semestre</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
<?php
    require_once "proceso_registro_consulta/mostrarRegistroAlum.php";
        if(is_array($data['estudiante'])|| is_object($data['estudiante'])){ 
        foreach($data['estudiante'] as $datotodo){
            echo'<tr>';
            echo'<td>'.$datotodo['id'].'</td>';
            echo'<td>'.$datotodo['programaestudios'].'</td>';
            echo'<td>'.$datotodo['codigoestudiante'].'</td>';
            echo'<td>'.$datotodo['primernombre'].'</td>';
            echo'<td>'.$datotodo['segundonombre'].'</td>';
            echo'<td>'.$datotodo['primerapellido'].'</td>';
            echo'<td>'.$datotodo['segundoapellido'].'</td>';
            echo'<td>'.$datotodo['genero'].'</td>';
            echo'<td>'.$datotodo['direccion'].'</td>';
            echo'<td>'.$datotodo['semestre'].'</td>';
            echo"<td><a class='btn btn-success' href='actualizaralumno.php?c=actualizaralumno&id=".$datotodo['id']."'>Actualizar</a> </td>";
            echo"<td  id='updateEliminar'><a class='btn btn-danger' href='index.php?e=eliminaralumno&id=".$datotodo['id']."'>Eliminar</a> </td>";
            echo'</tr>';
        } 
        require_once "proceso_registro_consulta/eliminandoAlumno.php";
            if(isset($_GET["e"])){
                $delete->eliminaralumno($_GET["id"]);
            }
            
    }   
        
?> 
  </tbody>
           
</table>
    </div>
    
</body>
</html>

  
