<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="js/cerrar.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  <form action="" method="post">
        <button type="submit" name="btncerrar" id="cerrar" class="btn btn-outline-danger">Cerrar Sesión
        </button>
        </form>
        <?php
         
            if(isset($_POST["btncerrar"])){    
                $_SESSION["nombre"];
                $_SESSION["id"];
                session_destroy();
                header("Location:loginEstudiante.php");
        }
      
        
        ?>
       
</body>
</html>