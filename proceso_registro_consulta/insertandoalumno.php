<?php
require_once "../consulta_registro/registraralumno.php";
$registrarAlumno= new registroalumno();
if(isset($_POST["registronuevoalumno"])){ 
$progEstudio=$_POST["programaestudios"];
$codEstudent=$_POST["codigoestudiante"];
# Convertir en array y enviar por separado
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
#  #   # 
$genero=$_POST["genero"];
$direccion=$_POST["direccion"];
$semestre=$_POST["semestre"];
   
 $registrarAlumno->insertaralumno($progEstudio,$codEstudent,$nombre1,$nombre2,$apellido1,$apellido2,$genero,$direccion,$semestre);
}

 //ACTUALIZAR DATOS

 else if(isset($_POST["actualizar"])){
    $progEstudi=$_POST["programaestudios"];
    $codEstuden=$_POST["codigoestudiante"];
    # Convertir en array y enviar por separado
    $nombre =array();
    array_push($nombre,explode(" ",trim($_POST["nombres"])));
    $apellido=array();
    array_push($apellido,explode(" ",trim($_POST["apellidos"])));
    var_dump($apellido);
    #
    function desempacado($nombre,$key){
        global $nombre11,$nombre22;
     $nombre11=$nombre[0];
       $nombre22=$nombre[1];
    }
    array_walk($nombre,"desempacado");
    function desempacado2($apellido){
        global $apellido11,$apellido22;
    $apellido11=$apellido[0];
    $apellido22=$apellido[1];
    }
    array_walk($apellido,"desempacado2");
    #  #   # 
    $gener=$_POST["genero"];
    $direccio=$_POST["direccion"];
    $semestr=$_POST["semestre"];
       $id=$_POST["id"];
        
       $registrarAlumn = new registroalumno();
     $registrarAlumn->actualizaralumno($id,$progEstudi,$codEstuden,$nombre11,$nombre22,$apellido11,$apellido22,$gener,$direccio,$semestr);
 }
?>