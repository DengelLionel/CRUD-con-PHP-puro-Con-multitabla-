<?php
require_once "consulta_registro/muestraregistroalumno.php";
$mostrarAl=new muestraregistroalumno();
$mostrarcursoEstudiante=new muestraregistroalumno();
$data['estudiante']= $mostrarAl->mostrarDatosAlumno();
$data['cursoestudiante']=$mostrarcursoEstudiante->mostrarDatosAlumnoCurso();
?>