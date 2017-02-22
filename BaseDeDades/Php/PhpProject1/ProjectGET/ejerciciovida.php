<?php

$fechadenacimiento = $_GET['fechadenacimiento'];
$fechaactual = $_GET['fechaactual'];
$edad = $fechaactual - $fechadenacimiento;
echo" tienes $edad años";
$años = $edad * 12;
echo" has vivido $años meses";
$dias = $años * 30;
echo" has vivido $dias dias";
$min = $dias * 60;
echo" has vivido $min minutos";
$seg = $min * 60;
echo" has vivido $seg segundos";
?>
