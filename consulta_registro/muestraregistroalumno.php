<?php
require_once "bd/bd.php";
class muestraregistroalumno extends bd{
    private $estudiantes;
    private $cursoestudiante;
    public function mostrarDatosAlumno(){
        $conexion=parent::conectar();
        $query="SELECT*FROM estudiante";
        $sql=$conexion->query($query);
        
        $this->estudiantes=array();
        if($sql->num_rows>0){
            
           while($datos=$sql->fetch_assoc()){
                $this->estudiantes[]=$datos;
            } 
      return  $this->estudiantes; 
        }
        
    }
    
    //Hacemos multitablas
    public function mostrarDatosAlumnoCurso(){
        $conexion=parent::conectar();
        $query="SELECT estudent.id,estudent.primernombre,curso.cursouno,curso.cursodos,curso.cursotres,curso.cursocuatro FROM estudiante AS estudent LEFT JOIN cursos AS curso ON curso.ide=estudent.id";
        $sql=$conexion->query($query);
        
        $this->cursoestudiante=array();
        if($sql->num_rows>0){
            
           while($datos=$sql->fetch_assoc()){
                $this->cursoestudiante[]=$datos;
            } 
      return  $this->cursoestudiante; 
        }
        
    }
}
?>