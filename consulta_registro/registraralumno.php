<?php
require_once "../bd/bd.php";


class registroalumno extends bd{
   

    public function insertaralumno($programaestudios,$codestud,$prnombre,$segnombre,$prpellido,$segapellido,$genero,$direccion,$semestre){
       
        $conexion=parent::conectar();
        $query="INSERT INTO estudiante(programaestudios,codigoestudiante,primernombre,segundonombre,primerapellido,segundoapellido,genero,direccion,semestre)VALUES('$programaestudios','$codestud','$prnombre','$segnombre','$prpellido','$segapellido','$genero','$direccion','$semestre')";
        $sql=$conexion->query($query);
        $completo=$query;
        if($sql>0){
            echo "registrado ok";
            header("Location:../index.php");
        }else{
            echo "no se registró";
        }

    }
    public function actualizaralumno($id,$progEstudio,$codEstudent,$nombre1,$nombre2,$apellido1,$apellido2,$genero,$direccion,$semestre){
        
        $conexion=parent::conectar();
        $query="UPDATE estudiante SET programaestudios='$progEstudio',codigoestudiante='$codEstudent',primernombre='$nombre1',segundonombre='$nombre2',primerapellido='$apellido1',segundoapellido='$apellido2',genero='$genero',direccion='$direccion',semestre='$semestre' WHERE id=$id";
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