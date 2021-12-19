<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="js/autenticar.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div class="container col-md-4" >

    <form action="bdlogin.php" method="post" class="row g-3">
    <h1 align=center>Login</h1>
    
    <div class="form-floating mb-3">
        
  <input type="text" name="nombre" class="form-control <?php if(isset($_POST["logear"])){  if($row==0) echo $valor="is-invalid ";} ?>" id="floatingInput" placeholder="Nombre"><!--   is-invalid -->
  <label for="floatingInput">Nombre</label>
  
</div>
<div class="form-floating " > 
  <input type="text" name="codigo" class="form-control <?php if(isset($_POST["logear"])){  if($row==0) echo $valor="is-invalid ";}  ?>" id="floatingPassword" placeholder="Código Estudiante">
  <label for="floatingPassword">Código Estudiante</label>
</div>
<div class="d-grid gap-2">
    <button type="submit" name="logear" class="btn btn-primary">LOGEAR</button>
  </div>
  <?php  


   if(isset($_POST["logear"])){ 
    if($row==0){ 
    echo '<div class="bg-danger bg-gradient p-2 text-white"><p>'.$coincidenom.'</p></div>';
    $valor=" is-invalid";
    }
    elseif($row==1){
       echo '<div class="bg-success p-2 text-white"><p  id="okvalidation">'.$coincidenok.'</p></div>';
    }
  
   }
    ?>
    </div>
    
    </form>
    
</div>

</body>
</html>