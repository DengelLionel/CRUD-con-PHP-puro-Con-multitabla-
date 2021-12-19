<?php
require_once "consulta_registro/muestraregistroprof.php";
$mostrarprofes=new muestraregistroprof();

$dataProfe['profe']= $mostrarprofes->mostrarDatosProfe();

?>