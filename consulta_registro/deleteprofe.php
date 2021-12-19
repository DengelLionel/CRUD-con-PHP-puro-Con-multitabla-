<?php
require_once "bd/bd.php";
class deleteProfe extends bd{
    
    public function eliminarprofe($id){
        $conexion=parent::conectar();
        
        $query="DELETE FROM profesor WHERE id=$id";
        $sql=$conexion->query($query);
        $sql=1;
            if($sql==1){
                $upt= '<script type="text/JavaScript"> window.open("/PHPPracticas/semana16/final/index.php","_top"); </script>';//Nos actualiza la pag.
                echo $upt;
                unset($upt); 
            }
    }
}
?>