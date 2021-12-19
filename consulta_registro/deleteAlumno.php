<?php
require_once "bd/bd.php";
/* En esta clase eliminamos los alumnos segun su id
 y lo redireccionamos al archivo index.php */
class deleteAlumno extends bd{
    
    public function eliminaralumno($id){
        $conexion=parent::conectar();
        
        $query="DELETE FROM estudiante WHERE id=$id";
        $sql=$conexion->query($query);
            $sql=1;
            if($sql==1){
                $upt= '<script type="text/JavaScript"> window.open("/PHPPracticas/semana16/final/index.php","_top"); </script>';
                echo $upt;
                unset($upt); 
            }
    }
}
?>