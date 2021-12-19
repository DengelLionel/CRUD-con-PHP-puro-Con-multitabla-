<?php
class bd{
    private $dbserver="localhost";
    private $dbname="instituto";
    private $dbuser="root";
    private $dbpassword="";
    private $conexion;
    protected $estudiante;
    private $id;
    public function conectar(){
        try{ 
        $this->conexion=new mysqli($this->dbserver,$this->dbuser,$this->dbpassword,$this->dbname);
         }catch(Exception $e){
            if($this->conexion==false){
                echo "No existe conexion".$this->conexion->mysqli_connect_error();
            }
         }
         return $this->conexion;
    }
  
    
    public function get_id(){
        return $this->id;
    }



/// Gracias al id que llamamos a traves de get para mostrar
/// los datos de la tabla estudiante.
    public function mostrarLosSeleccionadosId(){
        $this->conectar();
        if(isset($_GET["b"])){
            $id= $_GET["id"];
        $query="SELECT*FROM estudiante WHERE id=$id";
        $sql=$this->conexion->query($query);
            global $s; 
        $s = $sql->fetch_assoc();
        }
    }
        /*  En este metodo mostrarLosSeleccionadosIdProf() 
            Se muestra los datos de profesor gracias a GET.
         */
        public function mostrarLosSeleccionadosIdProf(){
            $this->conectar();
        if(isset($_GET["b"])){
            $id= $_GET["id"];
        $query="SELECT*FROM profesor WHERE id=$id";
        $sql=$this->conexion->query($query);
            global $prof; 
        $prof = $sql->fetch_assoc();
        }
        }
        
       
}

?>