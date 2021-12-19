<?php
 //login 
    require_once "bd/bd.php";
    $nombre=$_POST["nombre"];
    $cod=$_POST["codigo"];
    class logear extends bd{
        private $id; 
 public function LogearEstudiante(){
 
    $conexion = parent::conectar();
 
    global $nombre,$cod;
$consulta=$conexion->query("SELECT * FROM estudiante where primernombre='".$nombre."' and codigoestudiante= '".$cod."'");
global $row;
$row=mysqli_num_rows($consulta);

if($row==0){
global $coincidenom;
$coincidenom="los datos no coinciden $nombre  $cod";
require "loginEstudiante.php"; 
}

elseif($row==1){
global $coincidenok;
$coincidenok="Los datos si coiniciden...Espere Redireccionando";
require "loginEstudiante.php";
$consulta2=$conexion->query("SELECT id FROM estudiante WHERE codigoestudiante='".$cod."'");
global $idd;
$this->id=array();
$this->id=$consulta2->fetch_assoc();
$idd=$this->id;
$consulta3=$conexion->query("SELECT primernombre FROM estudiante WHERE codigoestudiante='".$cod."'");
$nombre=$consulta3->fetch_assoc();
session_start();
$_SESSION["id"]=$idd;
$_SESSION["nombre"]=$nombre;
return $idd;

}
}
}
$conec=new logear();
$conec->LogearEstudiante();
?>