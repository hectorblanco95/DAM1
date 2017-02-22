<?php

$num = $_GET['numeroenromano'];


$unidadesarray = array("-", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX");
$decenasarray = array("-", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC");
$centenasarray = array("-", "C", "CC", "CCC", "CD", "D");
$unidades = $num % 10;
$decenas = ($num - $unidades) % 100;
$centenas = ($num - $decenas - $unidades) % 1000;
$pos = $decenas / 10;
$pos2 = $centenas / 100;
if ($num < 10) {
    echo $unidadesarray[$unidades];
}
if ($num >= 10 && $num < 100) {

    echo "$decenasarray[$pos]$unidadesarray[$unidades]";
}
if ($num >= 100 && $num <= 500) {

    echo "$centenasarray[$pos2]$decenasarray[$pos]$unidadesarray[$unidades]";
}
?>
