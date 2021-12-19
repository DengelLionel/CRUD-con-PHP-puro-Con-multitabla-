<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
    <h1>Hola <?php
        session_start();
        $mostrarId=array();
        $mostrarId=$_SESSION["id"];
        foreach($_SESSION["nombre"] as $nombre ){
            echo $nombre;
        }
     
        ?></h1>
        <br>
        <h2>Elija los cursos que desee estudiar</h2>
        <form action="" method="post">
        <div class="form-check">
  <input class="form-check-input" type="checkbox" name="checklista[]" value="POO" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Programación Orientada a Objetos
  </label>
</div>

<!-- Otro checkbox -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="checklista[]" value="Fundamentos de la programación" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Fundamentos de la Programación
  </label>
</div>
<!-- Otro check -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="checklista[]" value="Base de datos" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Base de datos
  </label>
</div>
<!-- Otro check -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="checklista[]" value="Desarrollo web" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Desarrollo web
  </label>
</div>
<!-- Otro check -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="checklista[]" value="Desarrollo Movil" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
    Desarrollo Movil
  </label>
</div>
<button type="submit" name="btncursos" class="btn btn-primary">ENVIAR</button>
</form>
        <div class="cerrar">
            <?php
            require_once "cerrarsession.php";
            ?>
        </div>
        </div>
        <?php
        require_once "cursosselec.php";
        $cursos=new cursos();
       

        if(isset($_POST["btncursos"])){
            if(!empty($_POST["checklista"])){
                $contador=count($_POST["checklista"]);
                if($contador==4){ 
                
                $cursouno=$_POST["checklista"][0];
                $cursodos=$_POST["checklista"][1];
                $cursotres=$_POST["checklista"][2];
                $cursocuatro=$_POST["checklista"][3];
                $id=$mostrarId['id'];
              $cursos-> insertandoCursoSegunAlumno($id,$cursouno,$cursodos,$cursotres,$cursocuatro); 

            }else{
                echo '<div class="bg-danger bg-gradient p-2 text-white"><p> SOLO SELECCIONE 4 CURSOS </p></div>';
            }
            }

        }
      
        

        
        
          

        ?>
</body>
</html>