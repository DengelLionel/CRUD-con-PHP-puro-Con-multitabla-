<?php
require_once "bd/bd.php";
class muestraregistroprof extends bd{
    private $profe;
    public function mostrarDatosProfe(){
        $conexion=parent::conectar();
        $query="SELECT*FROM profesor";
        $sql=$conexion->query($query);
        
        $this->profe=array();
        if ($sql !== false && $sql->num_rows > 0){
           while($datos=$sql->fetch_assoc()){
                $this->profe[]=$datos;
            } 
      return  $this->profe; 
        }
        
    }
 
}
?>