<?php
require_once "../bd/bd.php";


class registroprofesor extends bd{
   

    public function insertarprofesor($prnombre,$segnombre,$prpellido,$segapellido,$dni,$celular){
       
        $conexion=parent::conectar();
        $query="INSERT INTO profesor(primernombre,segundonombre,primerapellido,segundoapellido,dni,celular)VALUES('$prnombre','$segnombre','$prpellido','$segapellido','$dni','$celular')";
        $sql=$conexion->query($query);
        $completo=$query;
        if($sql>0){
            echo "registrado ok";
            header("Location:../index.php");
        }else{
            echo "no se registró";
        }

    }
    //Actualizar profesores
    public function actualizarprofe($id,$prnombre,$segnombre,$prpellido,$segapellido,$dni,$celular){
        $conexion=parent::conectar();
        $query="UPDATE profesor SET primernombre='$prnombre',segundonombre='$segnombre',primerapellido='$prpellido',segundoapellido='$segapellido',dni='$dni',celular='$celular' WHERE id='$id'";
        $sql=$conexion->query($query);
        $completo=$query;
        echo $sql;
        if($sql>0){
            echo "registrado ok";
            header("Location:../index.php");
        }else{
            echo "no se registró XD";
        }
    }
    
}
?>