<?php
require_once "../consulta_registro/registrarprofesor.php";
$insertar=new registroprofesor();
if(isset($_POST["insertarprofe"])){ 
$nombres =array();
array_push($nombres,explode(" ",trim($_POST["nombres"])));
$apellidos=array();
array_push($apellidos,explode(" ",trim($_POST["apellidos"])));
var_dump($apellidos);
#
function desempacar($nombre,$key){
    global $nombre1,$nombre2;
    if(count($nombre)==2){
        $nombre1=$nombre[0];
        $nombre2=$nombre[1];
    }else{
        $nombre1=$nombre[0];
    }

}
array_walk($nombres,"desempacar");
function desempacar2($apellido){
    global $apellido1,$apellido2;
    if(count($apellido)==2){
    $apellido1=$apellido[0];
    $apellido2=$apellido[1];
    }else{
        $apellido1=$apellido[0];
    }

}
array_walk($apellidos,"desempacar2");
## Finaliza dividir la cadena nombres y apellidos
$dni=$_POST["dni"];
$celular=$_POST["celular"];
$insertar->insertarprofesor($nombre1,$nombre2,$apellido1,$apellido2,$dni,$celular);
}

// ACTUALIZAR DATA PROFESOR
   else if(isset($_POST["actualizarprof"])){ 
$nombres =array();
array_push($nombres,explode(" ",trim($_POST["nombres"])));
$apellidos=array();
array_push($apellidos,explode(" ",trim($_POST["apellidos"])));
var_dump($apellidos);
#
function desempacar($nombre,$key){
    global $nombre1,$nombre2;
 $nombre1=$nombre[0];
   $nombre2=$nombre[1];
}
array_walk($nombres,"desempacar");
function desempacar2($apellido){
    global $apellido1,$apellido2;
$apellido1=$apellido[0];
$apellido2=$apellido[1];
}
array_walk($apellidos,"desempacar2");
## Finaliza dividir la cadena nombres y apellidos
$dni=$_POST["dni"];
$celular=$_POST["celular"];
$id=$_POST["id"];
$actualizar=new registroprofesor();
$actualizar->actualizarprofe($id,$nombre1,$nombre2,$apellido1,$apellido2,$dni,$celular);

}
?>